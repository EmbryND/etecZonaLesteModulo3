package com.example.provawagner.model;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;

public class Aluno extends Pessoa {

    public Aluno(String nome, Integer idade, String cpf) {
        super(nome, idade, cpf);
    }

    @NotNull(message = "Curso não pode ser nulo")
    @NotBlank(message = "Curso não pode ser vazio")
    private String curso;

    public String getCurso() {
        return curso;
    }

    public void setCurso(String curso) {
        this.curso = curso;
    }
}
