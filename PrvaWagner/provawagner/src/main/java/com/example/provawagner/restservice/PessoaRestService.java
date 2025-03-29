package com.example.provawagner.restservice;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Optional;
import java.util.stream.Collectors;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.provawagner.model.Aluno;
import com.example.provawagner.model.Pessoa;
import com.example.provawagner.model.Professor;
import com.example.provawagner.model.request.AlterarNome;

import jakarta.validation.Valid;

@RestController
@RequestMapping("/api/v1")
public class PessoaRestService {
    private List<Pessoa> pessoas = new ArrayList<>();

    @GetMapping("/pessoas/listar")
    public Map<String, List<Pessoa>> getPessoas() {
        List<Pessoa> alunos = pessoas.stream()
            .filter(p -> p instanceof Aluno)
            .collect(Collectors.toList());

        List<Pessoa> professores = pessoas.stream()
                .filter(p -> p instanceof Professor)
                .collect(Collectors.toList());

        return Map.of(
            "alunos", alunos,
            "professores", professores
        );
    }

    @PostMapping("/alunos/inserir")
    public List<Pessoa> inserirAluno(@RequestBody @Valid Aluno aluno) {
        System.out.println("Aluno inserido " + aluno);
        pessoas.add(aluno);
        return pessoas;
    }

    @PostMapping("/professores/inserir")
    public List<Pessoa> inserirProfessor(@RequestBody @Valid Professor professor) {
        System.out.println("Professor inserido " + professor);
        pessoas.add(professor);
        return pessoas;
}

@PutMapping("/pessoa/alterar")
public String alterarNome(@RequestBody AlterarNome request) {
    Optional<Pessoa> pessoaEncontrada = pessoas.stream()
            .filter(p -> p.getNome().equalsIgnoreCase(request.getNomeAntigo()))
            .findFirst();

    if (pessoaEncontrada.isPresent()) {
        Pessoa pessoa = pessoaEncontrada.get();
        if (pessoa.getIdade() >= 18) {
            pessoa.setNome(request.getNovoNome());
            return "Nome alterado com sucesso!";
        } else {
            return "Nome não pode ser alterado, pois a pessoa é menor de idade!";
        }
    }
    return "Pessoa não encontrada!";
}
}