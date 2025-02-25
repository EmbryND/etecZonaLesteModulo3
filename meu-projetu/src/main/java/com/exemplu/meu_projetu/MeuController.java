package com.exemplu.meu_projetu;

import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/api")
public class MeuController {

    // Rota com PathVariable
    @GetMapping("/saudacao/{nome}")
    public String saudacao(@PathVariable String nome) {
        return "Olá, " + nome + "!";
    }

    // Rota com RequestParam
    @GetMapping("/soma")
    public String soma(@RequestParam int a, @RequestParam int b) {
        int resultado = a + b;
        return "A soma de " + a + " e " + b + " é " + resultado;
    }
}