package com.example.provawagner.model;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;

public class Professor extends Pessoa {

    public Professor(String nome, Integer idade, String cpf) {
        super(nome, idade, cpf);
    }

    @NotNull(message = "Disciplina não pode ser nula")
    @NotBlank(message = "Disciplina não pode ser vazia")
    private String disciplina;

    public String getDisciplina() {
        return disciplina;
    }

    public void setDisciplina(String disciplina) {
        this.disciplina = disciplina;
    }
}
