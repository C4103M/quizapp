-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.byetcluster.com
-- Tempo de geração: 29/08/2023 às 14:09
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_34700792_quizapp`
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
  `resposta_correta` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `questoes`
--

INSERT INTO `questoes` (`id`, `pergunta`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `resposta_correta`) VALUES
(1, 'Qual é a função da memória RAM em um computador?', 'Armazenar permanentemente arquivos', 'Executar instruções do sistema operacional', 'Controlar a temperatura interna do computador', 'Permitir acesso rápido aos dados temporários', 'd'),
(2, 'Qual é a unidade de medida de armazenamento de dados?', 'Hertz', 'Watt', 'Byte', 'Pixel', 'c'),
(3, 'O que é um processador?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados', 'Um dispositivo que executa cálculos e operações lógicas', 'd'),
(4, 'Qual é a função da placa-mãe em um computador?', 'Controlar a iluminação interna do gabinete', 'Conectar todos os componentes do computador', 'Armazenar arquivos permanentemente', 'Controlar a temperatura interna do computador', 'b'),
(5, 'O que é um disco rígido (HD)?', 'Um dispositivo de entrada de dados', 'Um dispositivo de saída de dados', 'Um dispositivo de armazenamento de dados permanente', 'Um dispositivo que executa cálculos e operações lógicas', 'c'),
(6, 'Qual é a função da placa de vídeo em um computador?', 'Conectar todos os componentes do computador', 'Controlar a iluminação interna do gabinete', 'Permitir a exibição de imagens na tela', 'Controlar a temperatura interna do computador', 'c'),
(7, 'O que é uma porta USB?', 'Uma porta de entrada de vídeo', 'Uma porta de entrada de áudio', 'Uma porta de entrada de energia', 'Uma porta de entrada de dados', 'd'),
(8, 'O que é uma placa de som?', 'Um dispositivo que controla a temperatura interna do computador', 'Um dispositivo que executa cálculos e operações lógicas', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que permite a exibição de imagens na tela', 'c'),
(9, 'O que é uma fonte de alimentação em um computador?', 'Um dispositivo que permite a reprodução de áudio', 'Um dispositivo que fornece energia elétrica para todos os componentes do computador', 'Um dispositivo que permite a exibição de imagens na tela', 'Um dispositivo que controla a temperatura interna do computador', 'b'),
(10, 'Qual é a função de um modem em um computador?', 'Conectar o mouse ao computador', 'Permitir a conexão com uma rede local', 'Permitir a conexão com a internet', 'Controlar a temperatura interna do computador', 'c');

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
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `user_name`, `user_email`, `user_password`, `user_xp`, `img`) VALUES
(1, 'Caio', '', '', 0, ''),
(2, 'c@a', 'caio', 'love', 0, ''),
(3, 'c@a', 'caio', 'love', 0, ''),
(4, 'c@a', 'caio', 'love', 0, ''),
(5, 'cc', 'c@a', '12', 0, ''),
(6, 'Caio', 'r@e', '202cb962ac59075b964b07152d234b70', 66, 'e94c51f1c8014e786d66fe6698627edd.jpg'),
(7, 'caio', 'novo@teste', '202cb962ac59075b964b07152d234b70', 100, ''),
(8, 'Caio 26', 'caioemanoel36@gmail.com', '202cb962ac59075b964b07152d234b70', 400, 'e94c51f1c8014e786d66fe6698627edd.jpg');

--
-- Índices de tabelas apagadas
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
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
