-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2023 às 16:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quizapp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `questoes`
--

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(255) DEFAULT NULL,
  `alternativa_a` varchar(255) DEFAULT NULL,
  `alternativa_b` varchar(255) DEFAULT NULL,
  `alternativa_c` varchar(255) DEFAULT NULL,
  `alternativa_d` varchar(255) DEFAULT NULL,
  `resposta_correta` char(1) DEFAULT NULL,
  `area_conhecimento` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `questoes`
--

INSERT INTO `questoes` (`id`, `pergunta`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `resposta_correta`, `area_conhecimento`) VALUES
(1, 'Qual é a função da memória RAM em um computador?', 'Armazenar permanentemente arquivos', 'Executar instruções do sistema operacional', 'Controlar a temperatura interna do computador', 'Permitir acesso rápido aos dados temporários', 'd', 'hardware'),
(2, 'Qual é a unidade de medida de armazenamento de dados?', 'Hertz', 'Watt', 'Byte', 'Pixel', 'c', 'hardware'),
(3, 'O que é um processador?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados', 'Um dispositivo que executa cálculos e operações lógicas', 'd', 'hardware'),
(4, 'Qual é a função da placa-mãe em um computador?', 'Controlar a iluminação interna do gabinete', 'Conectar todos os componentes do computador', 'Armazenar arquivos permanentemente', 'Controlar a temperatura interna do computador', 'b', 'hardware'),
(5, 'O que é um disco rígido (HD)?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados permanente', 'Um dispositivo que executa cálculos e operações lógicas', 'c', 'hardware'),
(6, 'Qual é a função da placa de vídeo em um computador?', 'Conectar todos os componentes do computador', 'Controlar a iluminação interna do gabinete', 'Permitir a exibição de imagens na tela', 'Controlar a temperatura interna do computador', 'c', 'hardware'),
(7, 'O que é uma porta USB?', 'Uma porta de entrada de vídeo', 'Uma porta de entrada de áudio', 'Uma porta de entrada de energia', 'Uma porta de entrada de dados', 'd', 'hardware'),
(8, 'O que é uma placa de som?', 'Um dispositivo que controla a temperatura interna do computador', 'Um dispositivo que executa cálculos e operações lógicas', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que permite a exibição de imagens na tela', 'c', 'hardware'),
(9, 'O que é uma fonte de alimentação em um computador?', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que fornece energia elétrica para todos os componentes do computador', 'Um dispositivo que permite a exibição de imagens na tela', 'Um dispositivo que controla a temperatura interna do computador', 'b', 'hardware'),
(10, 'Qual é a função de um modem em um computador?', 'Conectar o mouse ao computador', 'Permitir a conexão com uma rede local', 'Permitir a conexão com a internet', 'Controlar a temperatura interna do computador', 'c', 'hardware'),
(11, 'Qual é o principal sistema operacional utilizado em computadores pessoais?', 'Windows', 'iOS', 'Android', 'Linux', 'a', 'sistemas_operacionais'),
(12, 'Qual é a função da memória RAM em um computador?', 'Armazenar permanentemente arquivos', 'Executar instruções do sistema operacional', 'Controlar a temperatura interna do computador', 'Permitir acesso rápido aos dados temporários', 'd', 'hardware'),
(13, 'Qual é a unidade de medida de armazenamento de dados?', 'Hertz', 'Watt', 'Byte', 'Pixel', 'c', 'hardware'),
(14, 'O que é um processador?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados', 'Um dispositivo que executa cálculos e operações lógicas', 'd', 'hardware'),
(15, 'Qual é a função da placa-mãe em um computador?', 'Controlar a iluminação interna do gabinete', 'Conectar todos os componentes do computador', 'Armazenar arquivos permanentemente', 'Controlar a temperatura interna do computador', 'b', 'hardware'),
(16, 'O que é um disco rígido (HD)?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados permanente', 'Um dispositivo que executa cálculos e operações lógicas', 'c', 'hardware'),
(17, 'Qual é a função da placa de vídeo em um computador?', 'Conectar todos os componentes do computador', 'Controlar a iluminação interna do gabinete', 'Permitir a exibição de imagens na tela', 'Controlar a temperatura interna do computador', 'c', 'hardware'),
(18, 'O que é uma porta USB?', 'Uma porta de entrada de vídeo', 'Uma porta de entrada de áudio', 'Uma porta de entrada de energia', 'Uma porta de entrada de dados', 'd', 'hardware'),
(19, 'O que é uma placa de som?', 'Um dispositivo que controla a temperatura interna do computador', 'Um dispositivo que executa cálculos e operações lógicas', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que permite a exibição de imagens na tela', 'c', 'hardware'),
(20, 'O que é uma fonte de alimentação em um computador?', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que fornece energia elétrica para todos os componentes do computador', 'Um dispositivo que permite a exibição de imagens na tela', 'Um dispositivo que controla a temperatura interna do computador', 'b', 'hardware'),
(21, 'Qual é a função de um modem em um computador?', 'Conectar o mouse ao computador', 'Permitir a conexão com uma rede local', 'Permitir a conexão com a internet', 'Controlar a temperatura interna do computador', 'c', 'hardware'),
(22, 'Qual linguagem de programação é conhecida por sua utilização em desenvolvimento web e é amplamente usada para criar interações do lado do cliente?', 'Python', 'Java', 'JavaScript', 'Ruby', 'c', 'programacao'),
(23, 'O que é um \"loop\" em programação?', 'Um erro na sintaxe', 'Um tipo de variável', 'Uma estrutura de controle que permite a repetição de um bloco de código', 'Um tipo de função', 'c', 'programacao'),
(24, 'Qual é a diferença entre uma linguagem de programação de alto nível e uma linguagem de programação de baixo nível?', 'Alto nível é mais difícil de aprender do que baixo nível', 'Baixo nível é mais portátil do que alto nível', 'Alto nível está mais próximo da linguagem de máquina do computador, enquanto baixo nível é mais abstrato', 'Baixo nível é usado apenas em dispositivos móveis', 'c', 'programacao'),
(25, 'Qual dos seguintes não é um tipo de dado em programação?', 'String', 'Loop', 'Booleano', 'Inteiro', 'b', 'programacao'),
(26, 'O que é um \"debugger\" em programação?', 'Uma ferramenta para criar interfaces de usuário', 'Uma ferramenta para rastrear e corrigir erros no código', 'Uma linguagem de programação popular', 'Um tipo de dado', 'b', 'programacao'),
(27, 'Qual linguagem de marcação é usada para estilizar elementos da web?', 'JavaScript', 'HTML', 'CSS', 'Python', 'c', 'estilizacao'),
(28, 'Qual propriedade CSS é usada para definir a cor de fundo de um elemento HTML?', 'color', 'background-color', 'font-family', 'border-width', 'b', 'estilizacao'),
(29, 'O que significa a sigla RGB quando se trata de cores em CSS?', 'Vermelho, Verde, Azul', 'Rico, Brilhante, Brilhante', 'Redondo, Gradiente, Brilhante', 'Responsivo, Gradiente, Negrito', 'a', 'estilizacao'),
(30, 'Qual unidade de medida CSS é usada para definir tamanhos de fonte em relação ao tamanho base definido no elemento pai?', 'px', 'em', '% (porcentagem)', 'vw (largura da viewport)', 'b', 'estilizacao'),
(31, 'Qual seletor CSS é usado para estilizar todos os elementos de âncora (links) que foram visitados?', ':active', ':visited', ':hover', ':focus', 'b', 'estilizacao'),
(32, 'O que é um algoritmo?', 'Um programa de computador', 'Um tipo de dado', 'Uma linguagem de programação', 'Um conjunto de etapas para resolver um problema', 'd', 'programacao'),
(33, 'Qual dos seguintes não é um tipo de estrutura de controle em programação?', 'Sequência', 'Seleção', 'Repetição', 'Função', 'a', 'programacao'),
(34, 'O que é uma variável em programação?', 'Um comentário no código', 'Um valor constante', 'Um nome dado a um valor armazenado na memória', 'Um tipo de dado', 'c', 'programacao'),
(35, 'O que é uma função em programação?', 'Uma declaração de variável', 'Um valor constante', 'Um bloco de código que executa uma tarefa específica', 'Um tipo de dado', 'c', 'programacao'),
(36, 'O que é um loop infinito em programação?', 'Um loop que não realiza iterações', 'Um loop que nunca para de executar', 'Um loop que sempre retorna um valor verdadeiro', 'Um loop que faz apenas uma iteração', 'b', 'programacao'),
(37, 'Em programação, o que é uma classe?', 'Uma instância de um objeto', 'Um bloco de código que executa uma tarefa específica', 'Um tipo de dado', 'Um modelo para criar objetos', 'd', 'programacao'),
(38, 'O que é um sistema operacional?', 'Um programa de edição de texto', 'Uma aplicação de planilha', 'Software que gerencia hardware e software em um computador', 'Um tipo de linguagem de programação', 'c', 'sistemas_operacionais'),
(39, 'Qual é a principal função de um sistema operacional?', 'Executar aplicativos de produtividade', 'Gerenciar recursos de hardware e fornecer serviços a programas de aplicativos', 'Armazenar dados do usuário', 'Gerar relatórios de erros', 'b', 'sistemas_operacionais'),
(40, 'O que é uma chamada de sistema (system call) em um sistema operacional?', 'Uma chamada telefônica feita pelo sistema operacional', 'Uma instrução de hardware', 'Uma função disponível para programas de aplicativos por meio do sistema operacional', 'Um comando de terminal', 'c', 'sistemas_operacionais'),
(41, 'O que é multitarefa (multitasking) em um sistema operacional?', 'A capacidade de executar várias instâncias do sistema operacional simultaneamente', 'A capacidade de executar várias tarefas simultaneamente, alternando entre elas', 'A capacidade de usar vários monitores', 'A capacidade de executar programas de aplicativos em paralelo', 'b', 'sistemas_operacionais'),
(42, 'O que é um seletor CSS?', 'Um nome dado a uma cor', 'Uma regra de formatação para um elemento HTML', 'Um valor em pixels', 'Uma função JavaScript', 'b', 'estilizacao'),
(43, 'Qual é a finalidade do CSS no desenvolvimento web?', 'Realizar cálculos matemáticos', 'Gerenciar o banco de dados do site', 'Definir a aparência e o estilo dos elementos HTML', 'Executar scripts no servidor', 'c', 'estilizacao'),
(44, 'O que é um framework CSS?', 'Uma linguagem de programação', 'Uma biblioteca JavaScript', 'Um conjunto de estilos e regras predefinidos para facilitar o estilo de sites', 'Um tipo de dado', 'c', 'estilizacao'),
(45, 'Qual propriedade CSS é usada para alterar a cor do texto de um elemento HTML?', 'background-color', 'font-size', 'text-color', 'color', 'd', 'estilizacao'),
(46, 'O que significa a sigla HTML em relação a linguagens de marcação web?', 'Hyperlink Text Markup Language', 'Hyper Transfer Markup Language', 'Hypertext Markup Language', 'High-Level Text Markup Language', 'c', 'estilizacao'),
(47, 'Qual é a finalidade do elemento HTML <div>?', 'Display a list of items', 'Create a link to another page', 'Group and structure content for styling or manipulation with JavaScript', 'Insert an image', 'c', 'estilizacao'),
(48, 'O que é responsividade em web design?', 'Um tipo de fontes usados em websites', 'A habilidade de um website de se ajustar automaticamente a diferentes tamanhos de telas', 'Um tipo de framework CSS', 'A qualidade de imagens usados em um website', 'b', 'estilizacao'),
(49, 'Qual é o propósito do elemento HTML <a>?', 'Inserir um cabeçalho no corpo da página', 'Exibir uma imagem', 'Criar um link', 'Define um elemento como Negrito', 'c', 'estilizacao'),
(50, 'O que é um URL?', 'Uniform Resource Locator - um endereço que especifica um recurso na web', 'Universal Reference Language - uma linguagem de programação', 'User Recognition Logic - um mecanismo de autenticação de usuário', 'Unique Resource Listing - uma lista exclusiva de recursos de software', 'a', 'hardware'),
(51, 'Qual é a função do protocolo HTTP na internet?', 'Determinar o hardware de um servidor', 'Criptografar a comunicação entre o cliente e o servidor', 'Gerenciar a distribuição de endereços IP', 'Permitir a transferência de hipertexto e outros dados na World Wide Web', 'd', 'hardware'),
(52, 'O que é um navegador da web?', 'Um programa que permite a criação de sites', 'Um software que cria servidores web', 'Um aplicativo que permite a visualização de sites e conteúdo na internet', 'Uma linguagem de programação para web', 'c', 'hardware'),
(53, 'O que é um IP (Protocolo de Internet) em termos de redes?', 'Uma unidade de medição de velocidade de conexão', 'Um sistema de autenticação de usuário', 'Um endereço numérico atribuído a cada dispositivo conectado a uma rede de computadores que usa o protocolo IP', 'Um tipo de cabo de rede', 'c', 'hardware'),
(54, 'Qual é a função de um firewall em uma rede de computadores?', 'Acelerar a velocidade da conexão de internet', 'Proteger a rede de acessos não autorizados ou tráfego malicioso', 'Gerenciar endereços IP', 'Rastrear a atividade online dos usuários', 'b', 'hardware'),
(55, 'O que é um sistema de arquivos em um computador?', 'Um programa que permite a criação de arquivos', 'Um dispositivo de armazenamento de dados', 'Uma estrutura que organiza e gerencia o armazenamento de dados em um computador', 'Um tipo de software antivírus', 'c', 'sistemas_operacionais'),
(56, 'O que é um programa de software?', 'Um arquivo de texto', 'Um documento digital', 'Um conjunto de instruções que um computador pode executar para realizar uma tarefa específica', 'Uma imagem', 'c', 'sistemas_operacionais'),
(57, 'Qual é a finalidade de um sistema de gerenciamento de banco de dados (SGBD)?', 'Editar vídeos', 'Gerenciar e organizar informações em um banco de dados', 'Projetar sites', 'Desenvolver aplicativos móveis', 'b', 'sistemas_operacionais'),
(58, 'O que é um vírus de computador?', 'Uma unidade de armazenamento de dados', 'Um dispositivo de hardware', 'Um software que permite a navegação na web', 'Um programa malicioso que pode infectar e danificar um computador', 'd', 'hardware'),
(59, 'O que é phishing?', 'Um tipo de software antivírus', 'Um ataque de segurança que visa enganar as pessoas para que revelem informações confidenciais', 'Um protocolo de segurança', 'Um sistema de autenticação biométrica', 'b', 'hardware'),
(60, 'O que é criptografia em segurança da informação?', 'Um sistema de backup', 'O processo de codificação de informações para protegê-las contra acesso não autorizado', 'Um programa de edição de imagens', 'Um serviço de streaming de vídeo', 'b', 'hardware'),
(61, 'O que é um ataque de força bruta em segurança cibernética?', 'Um ataque de segurança que utiliza criptografia para acessar informações', 'Uma técnica para forçar um usuário a fornecer sua senha por meio de ameaças', 'Um ataque que tenta adivinhar uma senha ao testar todas as combinações possíveis', 'Um ataque que se concentra na destruição de hardware de computador', 'c', 'hardware'),
(82, 'O que é um \"loop for\" em programação?', 'Uma estrutura de controle que repete um bloco de código até que uma condição seja verdadeira', 'Um tipo de dado que armazena números inteiros', 'Uma função para impressão de mensagens na tela', 'Um objeto em JavaScript', 'a', 'programacao'),
(83, 'O que é um \"array\" em programação?', 'Um dispositivo de armazenamento de dados', 'Uma estrutura de controle para repetição de código', 'Uma variável que armazena um único valor', 'Uma coleção de valores do mesmo tipo', 'd', 'programacao'),
(84, 'Qual é a finalidade da instrução \"if\" em programação?', 'Definir uma função', 'Repetir um bloco de código', 'Executar um bloco de código apenas se uma condição for verdadeira', 'Atribuir um valor a uma variável', 'c', 'programacao'),
(85, 'O que é um \"operador lógico\" em programação?', 'Um dispositivo de entrada de dados', 'Um elemento de interface do usuário', 'Um símbolo que combina duas ou mais expressões lógicas', 'Uma função que retorna o valor absoluto de um número', 'c', 'programacao'),
(86, 'O que é a \"recursão\" em programação?', 'Um tipo de loop', 'Um método para chamar funções dentro delas mesmas', 'Uma técnica para otimizar o código', 'Uma estrutura de dados', 'b', 'programacao'),
(87, 'O que é uma \"linguagem de programação orientada a objetos\"?', 'Uma linguagem que só permite programação orientada a objetos', 'Uma linguagem que não permite a criação de objetos', 'Uma linguagem que suporta a criação de classes e objetos', 'Uma linguagem que não suporta funções', 'c', 'programacao'),
(88, 'O que é a \"herança\" em programação orientada a objetos?', 'Um conceito que permite que uma classe herde atributos e métodos de outra classe', 'Um tipo de variável', 'Uma técnica para resolver erros de programação', 'Um operador lógico', 'a', 'programacao'),
(89, 'O que é \"polimorfismo\" em programação orientada a objetos?', 'Um tipo de loop', 'Um conceito que permite que objetos de diferentes classes sejam tratados de maneira uniforme', 'Uma técnica para criar funções recursivas', 'Um operador de comparação', 'b', 'programacao'),
(90, 'O que é \"encapsulamento\" em programação orientada a objetos?', 'Um conceito que impede o acesso aos atributos de uma classe', 'Um tipo de dado em programação', 'Um operador lógico', 'Um conceito que protege os detalhes internos de uma classe e permite o acesso controlado aos seus membros', 'd', 'programacao'),
(91, 'O que é \"debugging\" em programação?', 'Um processo de criar código de baixa qualidade', 'Um processo de otimização de código', 'Um processo de rastreamento e correção de erros no código', 'Um processo de documentação de código', 'c', 'programacao'),
(92, 'O que é um \"ponteiro\" em programação?', 'Um dispositivo de armazenamento de dados', 'Um tipo de dado que armazena números inteiros', 'Uma variável que contém a referência de memória de outra variável', 'Um objeto em JavaScript', 'c', 'programacao'),
(93, 'O que é um \"operador ternário\" em programação?', 'Um operador que realiza operações com três números', 'Um operador que opera em três variáveis', 'Um operador que retorna um valor com base em uma condição', 'Um operador que divide uma variável em três partes', 'c', 'programacao'),
(94, 'O que é \"version control\" em programação?', 'Um sistema que controla a versão do software instalado no computador', 'Um sistema que controla as versões de documentos e arquivos de código-fonte', 'Um sistema que controla a versão do sistema operacional', 'Um sistema que controla as versões dos drivers de hardware', 'b', 'programacao'),
(95, 'O que é \"pair programming\" em desenvolvimento de software?', 'Um processo de programação que envolve um único programador', 'Um processo de programação em que dois programadores trabalham juntos em um mesmo computador', 'Um processo de programação em que o código é revisado por pares', 'Um processo de programação em que duas equipes de programadores competem entre si', 'b', 'programacao'),
(96, 'O que é \"clean code\" em desenvolvimento de software?', 'Um tipo de código fonte que não funciona', 'Um tipo de código fonte que é fácil de ler e entender', 'Um tipo de código fonte que contém muitos erros de compilação', 'Um tipo de código fonte que não está documentado', 'b', 'programacao'),
(97, 'O que é \"test-driven development (TDD)\" em desenvolvimento de software?', 'Um processo de desenvolvimento em que os testes são escritos antes do código', 'Um processo de desenvolvimento que não envolve testes', 'Um processo de desenvolvimento em que os testes são escritos após o código', 'Um processo de desenvolvimento que não requer documentação', 'a', 'programacao'),
(98, 'O que é \"agile development\" em desenvolvimento de software?', 'Um processo de desenvolvimento de software que se move lentamente', 'Um processo de desenvolvimento que não permite mudanças no projeto', 'Um conjunto de metodologias de desenvolvimento de software que valoriza a colaboração, a adaptabilidade e a entrega rápida', 'Um processo de desenvolvimento que não envolve a equipe de desenvolvimento', 'c', 'programacao'),
(99, 'O que é \"continuous integration\" em desenvolvimento de software?', 'Um processo de desenvolvimento que não envolve integração de código', 'Um processo de desenvolvimento em que o código é integrado apenas no final do projeto', 'Um processo de desenvolvimento em que o código é integrado continuamente, com a execução de testes automáticos', 'Um processo de desenvolvimento que não envolve testes', 'c', 'programacao'),
(100, 'O que é \"refatoração\" em desenvolvimento de software?', 'Um processo de criar novas funcionalidades', 'Um processo de otimização de código', 'Um processo de eliminar todos os comentários no código', 'Um processo de documentação do código', 'b', 'programacao'),
(101, 'O que é um \"kernel\" em um sistema operacional?', 'Uma parte do sistema operacional que gerencia o hardware e fornece serviços para aplicativos', 'Uma linguagem de programação usada para escrever aplicativos', 'Uma interface gráfica do usuário', 'Um software antivírus', 'a', 'sistemas_operacionais'),
(102, 'O que é um \"processo\" em um sistema operacional?', 'Um programa de aplicativo', 'Um documento digital', 'Uma unidade de execução que contém código e dados', 'Um dispositivo de armazenamento de dados', 'c', 'sistemas_operacionais'),
(103, 'O que é \"gerenciamento de memória\" em um sistema operacional?', 'Uma técnica de economia de energia', 'Um conjunto de ferramentas para edição de imagens', 'O controle e a alocação de espaço de memória para programas em execução', 'Uma função de rede', 'c', 'sistemas_operacionais'),
(104, 'O que é uma \"tabela de página\" (page table) em sistemas operacionais?', 'Uma tabela que lista os processos em execução', 'Uma tabela que armazena as configurações de rede', 'Uma estrutura de dados que mapeia endereços virtuais para endereços físicos na memória', 'Uma tabela que contém as configurações da impressora', 'c', 'sistemas_operacionais'),
(105, 'O que é \"swap\" em um sistema operacional?', 'Uma função para troca de arquivos entre usuários', 'O ato de trocar a posição de teclas em um teclado', 'O processo de transferir dados entre a memória RAM e o armazenamento de disco', 'O ato de trocar dispositivos de hardware entre computadores', 'c', 'sistemas_operacionais'),
(106, 'O que é \"buffer de entrada/saída\" (I/O buffer) em sistemas operacionais?', 'Uma área de memória usada para armazenar temporariamente dados que estão sendo transferidos entre dispositivos de entrada/saída e memória principal', 'Uma área de armazenamento de documentos', 'Um arquivo de configuração do sistema', 'Uma pasta de trabalho em um aplicativo de planilha', 'a', 'sistemas_operacionais'),
(107, 'O que é um \"sistema de arquivos hierárquico\" em sistemas operacionais?', 'Um sistema que armazena todos os arquivos em um único diretório', 'Um sistema que organiza os arquivos em uma estrutura de árvore com diretórios e subdiretórios', 'Um sistema que não permite a organização de arquivos', 'Um sistema que armazena os arquivos em várias unidades de disco', 'b', 'sistemas_operacionais'),
(108, 'O que é \"núcleo monolítico\" em sistemas operacionais?', 'Um tipo de kernel que é executado em sistemas monolíticos', 'Uma técnica de otimização de código', 'Um tipo de kernel que contém todos os serviços do sistema operacional em um único bloco de código', 'Um tipo de sistema de arquivos', 'c', 'sistemas_operacionais'),
(109, 'O que é um \"sistema de arquivos distribuído\" em sistemas operacionais?', 'Um sistema que armazena arquivos em locais separados e isolados', 'Um sistema que não permite o compartilhamento de arquivos entre computadores', 'Um sistema que permite que vários computadores acessem e compartilhem arquivos em uma rede', 'Um sistema que apenas suporta sistemas de arquivos FAT', 'c', 'sistemas_operacionais'),
(110, 'O que é uma \"fila de impressão\" em sistemas operacionais?', 'Uma fila de pessoas esperando para usar um computador', 'Uma fila para imprimir documentos em uma gráfica', 'Uma fila de processos ou trabalhos de impressão aguardando para serem impressos', 'Uma fila de pessoas esperando na fila do restaurante', 'c', 'sistemas_operacionais'),
(111, 'O que é um \"sistema de arquivos em log\" (journaling file system) em sistemas operacionais?', 'Um sistema de arquivos usado para armazenar logs de eventos do sistema', 'Um sistema de arquivos que mantém um registro das operações de escrita em um log', 'Um sistema de arquivos que não requer registro', 'Um sistema de arquivos exclusivo para arquivos de log', 'b', 'sistemas_operacionais'),
(141, 'O que é a linguagem de manipulação de dados (DML) em banco de dados?', 'Uma linguagem para manipular objetos físicos', 'Uma linguagem usada para inserir, atualizar e excluir dados em um banco de dados', 'Uma linguagem para manipular DNA', 'Uma linguagem para desenhar mapas', 'b', 'banco_de_dados'),
(142, 'O que é um índice não clusterizado em um banco de dados?', 'Um índice que organiza dados em uma ordem específica', 'Um índice que não altera a ordem física dos dados na tabela', 'Um índice que não é usado em bancos de dados', 'Um tipo de gráfico circular', 'b', 'banco_de_dados'),
(143, 'O que é uma consulta SQL?', 'Uma pergunta feita a um banco de dados para recuperar informações específicas', 'Um tipo de dança', 'Uma operação de exclusão de dados', 'Uma operação de adição de dados', 'a', 'banco_de_dados'),
(144, 'O que é um banco de dados relacional?', 'Um banco de dados que tem muitas relações amorosas', 'Um banco de dados que organiza dados em tabelas com relações definidas', 'Um banco de dados que armazena apenas números inteiros', 'Um banco de dados que não usa SQL', 'b', 'banco_de_dados'),
(145, 'O que é a otimização de consulta em banco de dados?', 'O processo de tornar consultas de banco de dados mais rápidas e eficientes', 'O processo de criar mais consultas', 'O processo de criar consultas complexas', 'O processo de executar consultas sem otimização', 'a', 'banco_de_dados'),
(146, 'O que é a normalização de banco de dados de segunda forma (2NF)?', 'O processo de tornar um banco de dados de segunda geração', 'O processo de eliminar a redundância de dados e garantir que todos os campos não chave sejam funcionalmente dependentes da chave primária', 'O processo de criar duas cópias de segurança dos dados', 'O processo de criar uma cópia de dados', 'b', 'banco_de_dados'),
(147, 'O que é um índice clusterizado em um banco de dados?', 'Um índice que organiza dados em uma ordem específica', 'Um índice que não altera a ordem física dos dados na tabela', 'Um índice que organiza dados em várias tabelas', 'Um tipo de gráfico de dispersão', 'a', 'banco_de_dados'),
(148, 'O que é uma visão (view) em banco de dados?', 'Uma visão panorâmica', 'Uma representação virtual de dados de uma ou mais tabelas em um formato tabular', 'Um tipo de imagem', 'Um tipo de relatório', 'b', 'banco_de_dados'),
(149, 'O que é uma transação em banco de dados?', 'Uma operação bancária', 'Uma sequência de comandos SQL tratada como uma unidade indivisível', 'Uma operação de edição de texto', 'Um tipo de moeda virtual', 'b', 'banco_de_dados'),
(150, 'O que é a chave candidata em um banco de dados?', 'Uma chave que tenta abrir muitas portas', 'Um conjunto de campos que podem ser a chave primária de uma tabela', 'Uma senha para acessar o banco de dados', 'Um tipo de dança', 'b', 'banco_de_dados'),
(151, 'O que é a linguagem de manipulação de esquema (DCL) em banco de dados?', 'Uma linguagem para criar esquemas de cores', 'Uma linguagem usada para definir e controlar privilégios e autorizações em um banco de dados', 'Uma linguagem para criar animações', 'Uma linguagem para criar páginas da web', 'b', 'banco_de_dados'),
(152, 'O que é a chave super candidata em um banco de dados?', 'Uma chave que é a mais importante de todas', 'Um conjunto de campos que pode ser a chave primária de uma tabela, mas não é escolhido como tal', 'Uma chave que pode abrir qualquer porta', 'Um tipo de música', 'b', 'banco_de_dados'),
(153, 'O que é uma subconsulta em SQL?', 'Uma consulta de uma pessoa menor de idade', 'Uma consulta dentro de outra consulta SQL', 'Uma consulta que não pode ser usada em SQL', 'Uma consulta usada para contar registros', 'b', 'banco_de_dados'),
(154, 'O que é o conceito de atomicidade em transações de banco de dados?', 'O conceito de que as transações de banco de dados devem ser curtas e simples', 'O conceito de que uma transação de banco de dados é tratada como uma unidade indivisível e completa ou nenhuma parte dela é executada', 'O conceito de que as transações de banco de dados devem ser atômicas, ou seja, devem conter átomos', 'O conceito de que as transações de banco de dados devem ser atômicas, ou seja, devem conter átomos', 'b', 'banco_de_dados');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(99) NOT NULL,
  `user_email` varchar(99) NOT NULL,
  `user_password` varchar(99) NOT NULL,
  `user_xp` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `permission` varchar(32) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `user_name`, `user_email`, `user_password`, `user_xp`, `img`, `permission`) VALUES
(1, 'Caio', '', '', 0, '', 'user'),
(2, 'c@a', 'caio', 'love', 0, '', 'user'),
(3, 'c@a', 'caio', 'love', 0, '', 'user'),
(4, 'c@a', 'caio', 'love', 0, '', 'user'),
(5, 'cc', 'c@a', '12', 0, '', 'user'),
(6, 'Caio', 'r@e', '202cb962ac59075b964b07152d234b70', 123, 'imagens/b01a403b88f04843387814c69f266f43.jpg', 'admin'),
(7, 'caio', 'novo@teste', '202cb962ac59075b964b07152d234b70', 100, '', 'user'),
(8, 'Caio 26', 'caioemanoel36@gmail.com', '202cb962ac59075b964b07152d234b70', 400, '', 'user'),
(9, 'abc', 'q@t', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(10, 'Roberto carlos eu estou aq', 'rob@car', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(11, 'marta', 'c@a', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(12, 'david', 'david@a', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(13, 'david', 'v@e', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(14, 'david', 'w@q', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(15, 'porta', 'p@orta', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(16, 'rogerio ceni', 'rogerio@ceni', '202cb962ac59075b964b07152d234b70', 0, '', 'user'),
(17, 'david', 'w@q', '202cb962ac59075b964b07152d234b70', 0, '', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
