-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2024 às 12:09
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conexo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `professor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`, `professor_id`) VALUES
(1, 'Desenvolvimento de Sistemas', 1),
(2, 'Programação Web III', 2),
(3, 'Programação Web II', 3),
(4, 'Programação Web I', 4),
(5, 'Introdução a Computação', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`) VALUES
(1, 'Advérbios de Lugar'),
(2, 'Fontes de Energia'),
(3, 'Participantes num processo judicial'),
(4, 'Notas Musicais'),
(5, 'grupo 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_disciplinas`
--

CREATE TABLE `grupos_disciplinas` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupos_disciplinas`
--

INSERT INTO `grupos_disciplinas` (`id`, `grupo_id`, `disciplina_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 1, 2),
(8, 4, 3),
(9, 2, 4),
(10, 3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_palavras`
--

CREATE TABLE `grupos_palavras` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `palavra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupos_palavras`
--

INSERT INTO `grupos_palavras` (`id`, `grupo_id`, `palavra_id`) VALUES
(1, 1, 1),
(2, 4, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 5),
(7, 2, 6),
(8, 4, 6),
(9, 2, 7),
(10, 2, 8),
(11, 4, 9),
(12, 3, 9),
(13, 3, 10),
(14, 3, 11),
(15, 3, 12),
(16, 2, 13),
(17, 2, 14),
(18, 2, 15),
(19, 2, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavras`
--

CREATE TABLE `palavras` (
  `id` int(11) NOT NULL,
  `palavra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `palavras`
--

INSERT INTO `palavras` (`id`, `palavra`) VALUES
(1, 'lá'),
(2, 'acolá'),
(3, 'ali'),
(4, 'aqui'),
(5, 'vento'),
(6, 'sol'),
(7, 'carvão'),
(8, 'água'),
(9, 'ré'),
(10, 'juíza'),
(11, 'testemunha'),
(12, 'autora'),
(13, 'dó'),
(14, 'mi'),
(15, 'si'),
(16, 'fá');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`) VALUES
(1, 'professor 1'),
(2, 'professor 2'),
(3, 'professor 3'),
(4, 'professor 4'),
(5, 'professor 5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices para tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grupos_disciplinas`
--
ALTER TABLE `grupos_disciplinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_id` (`grupo_id`),
  ADD KEY `disciplina_id` (`disciplina_id`);

--
-- Índices para tabela `grupos_palavras`
--
ALTER TABLE `grupos_palavras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_id` (`grupo_id`),
  ADD KEY `palavra_id` (`palavra_id`);

--
-- Índices para tabela `palavras`
--
ALTER TABLE `palavras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `grupos_disciplinas`
--
ALTER TABLE `grupos_disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `grupos_palavras`
--
ALTER TABLE `grupos_palavras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `palavras`
--
ALTER TABLE `palavras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`id`);

--
-- Limitadores para a tabela `grupos_disciplinas`
--
ALTER TABLE `grupos_disciplinas`
  ADD CONSTRAINT `grupos_disciplinas_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `grupos_disciplinas_ibfk_2` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplinas` (`id`);

--
-- Limitadores para a tabela `grupos_palavras`
--
ALTER TABLE `grupos_palavras`
  ADD CONSTRAINT `grupos_palavras_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `grupos_palavras_ibfk_2` FOREIGN KEY (`palavra_id`) REFERENCES `palavras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
