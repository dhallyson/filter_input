# filter_input
O link para a aula no youtube: https://www.youtube.com/watch?v=_mGo9AuvpXw

A diferença entre o SANITIZE e o VALIDATE: <br>
SANITIZE vem do inglês higienizar ou seja ele limpa todo e qualquer valor que possa ser caracterizado como um HTML/SCRIPT. <br>
VALIDATE vem do inglês validar ou seja ele valida valores de acordo com os padrões <br>

FILTER_SANITIZE_STRING = Remove todas as tags HTML de uma sequência <br>
FILTER_SANITIZE_EMAIL = Remove todos os caracteres, exceto letras, dígitos e ! # $% & '* + - =? ^ _ `{|} ~ @. [] . <br>
FILTER_SANITIZE_NUMBER_INT = Remove todos os caracteres, exceto dígitos, sinal de mais e menos. <br>
FILTER_SANITIZE_SPECIAL_CHARS = Escapa <> & e caracteres com valor ASCII abaixo de 32 <br>

FILTER_VALIDATE_EMAIL = Valida se o valor é endereços de email válido
FILTER_VALIDATE_INT = Valida se o valor informado é um número inteiro
FILTER_VALIDATE_URL = Valida se o valor informado é uma url válida (necessário passar o https://)
FILTER_VALIDATE_IP = Valida se o valor informado é um IP seguindo os padrões de IPv4 ou IPv6

Para saber mais filtros estou deixando os links das suas devidas documentações
LINK 1 filter_validate: https://www.php.net/manual/en/filter.filters.validate.php
LINK 2 filter_sanitize: https://www.php.net/manual/en/filter.filters.sanitize.php

Espero ter ajudado!
