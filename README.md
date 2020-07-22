# filter_input <br>
O link para a aula no youtube: https://www.youtube.com/watch?v=_mGo9AuvpXw <br>
<br>
A diferença entre o SANITIZE e o VALIDATE: <br>
<b>SANITIZE</b> vem do inglês higienizar ou seja ele limpa todo e qualquer valor que possa ser caracterizado como um HTML/SCRIPT. <br>
<b>VALIDATE</b> vem do inglês validar ou seja ele valida valores de acordo com os padrões <br>
<br>
<b>FILTER_SANITIZE_STRING</b> = Remove todas as tags HTML de uma sequência <br>
<b>FILTER_SANITIZE_EMAIL</b> = Remove todos os caracteres, exceto letras, dígitos e ! # $% & '* + - =? ^ _ `{|} ~ @. [] . <br>
<b>FILTER_SANITIZE_NUMBER_INT</b> = Remove todos os caracteres, exceto dígitos, sinal de mais e menos. <br>
<b>FILTER_SANITIZE_SPECIAL_CHARS</b> = Escapa <> & e caracteres com valor ASCII abaixo de 32 <br>
<br>
<b>FILTER_VALIDATE_EMAIL</b> = Valida se o valor é endereços de email válido <br>
<b>FILTER_VALIDATE_INT</b> = Valida se o valor informado é um número inteiro <br>
<b>FILTER_VALIDATE_URL</b> = Valida se o valor informado é uma url válida (necessário passar o https://) <br>
<b>FILTER_VALIDATE_IP</b> = Valida se o valor informado é um IP seguindo os padrões de IPv4 ou IPv6 <br>
<br>
Para saber mais filtros estou deixando os links das suas devidas documentações <br>
<b>LINK 1 filter_validate:</b> https://www.php.net/manual/en/filter.filters.validate.php <br>
<b>LINK 2 filter_sanitize:</b> https://www.php.net/manual/en/filter.filters.sanitize.php <br>
<br>
Espero ter ajudado!
