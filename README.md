# filter_input <br>
O link para a aula no youtube: https://www.youtube.com/watch?v=_mGo9AuvpXw <br>
<br>
A diferença entre o SANITIZE e o VALIDATE: <br>
<b>SANITIZE</b> vem do inglês higienizar ou seja ele limpa todo e qualquer valor que possa ser caracterizado como um HTML/SCRIPT. <br>
VALIDATE vem do inglês validar ou seja ele valida valores de acordo com os padrões <br>
<br>
FILTER_SANITIZE_STRING = Remove todas as tags HTML de uma sequência <br>
FILTER_SANITIZE_EMAIL = Remove todos os caracteres, exceto letras, dígitos e ! # $% & '* + - =? ^ _ `{|} ~ @. [] . <br>
FILTER_SANITIZE_NUMBER_INT = Remove todos os caracteres, exceto dígitos, sinal de mais e menos. <br>
FILTER_SANITIZE_SPECIAL_CHARS = Escapa <> & e caracteres com valor ASCII abaixo de 32 <br>
<br>
FILTER_VALIDATE_EMAIL = Valida se o valor é endereços de email válido <br>
FILTER_VALIDATE_INT = Valida se o valor informado é um número inteiro <br>
FILTER_VALIDATE_URL = Valida se o valor informado é uma url válida (necessário passar o https://) <br>
FILTER_VALIDATE_IP = Valida se o valor informado é um IP seguindo os padrões de IPv4 ou IPv6 <br>
<br>
Para saber mais filtros estou deixando os links das suas devidas documentações <br>
LINK 1 filter_validate: https://www.php.net/manual/en/filter.filters.validate.php <br>
LINK 2 filter_sanitize: https://www.php.net/manual/en/filter.filters.sanitize.php <br>
<br>
Espero ter ajudado!
