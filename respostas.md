# Perguntas:

### Onde ocorre o CRUD?
O CRUD acontece principalmente no ArmaRepository.php. É ali que o sistema executa os comandos para criar, listar, buscar, atualizar e excluir armas no banco de dados.

As páginas da pasta public iniciam essas ações e mostram os formulários e resultados. Por exemplo, criar.php recebe os dados do formulário e chama o Repository para salvar.

### Onde está a regra de negócio?
Neste sistema, quase não há regras de negócio específicas. O código recebe e salva dados da arma, como modelo, calibre e ano de lançamento. O modelo Arma.php organiza esses dados, mas não define regras como “o ano deve estar dentro de certo intervalo”.

## Desafio profissional

### O Repository pode ser reutilizado?
Sim. O ArmaRepository pode ser reutilizado em diferentes páginas do sistema sempre que for preciso acessar os dados das armas.

Para outro tipo de cadastro, como veículos, a ideia pode ser reaproveitada, mas provavelmente será necessário criar um VeiculoRepository próprio.

### O que muda?
Para outro cadastro, mudam os dados específicos: o nome da classe, a tabela do banco e os campos usados nas consultas.

### O que permanece igual?
Permanece a forma de organizar as ações: criar, listar, buscar, atualizar e excluir. Também pode permanecer a ideia de deixar o acesso ao banco concentrado em um Repository, separado das páginas que exibem os formulários.