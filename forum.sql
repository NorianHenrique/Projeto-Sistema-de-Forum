-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2023 às 02:34
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forum.posts`
--

CREATE TABLE `tb_forum.posts` (
  `id` int(11) NOT NULL,
  `topico_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_forum.posts`
--

INSERT INTO `tb_forum.posts` (`id`, `topico_id`, `nome`, `mensagem`) VALUES
(1, 2, 'Curso de PHP', 'Comenta sobre o curso de PHP'),
(2, 5, 'Norian Henrique', 'Tag para criar o corpo do HTML '),
(3, 5, 'Norian Henrique', 'Tag para criar o corpo do HTML ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forum.topicos`
--

CREATE TABLE `tb_forum.topicos` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_forum.topicos`
--

INSERT INTO `tb_forum.topicos` (`id`, `forum_id`, `nome`) VALUES
(1, 1, 'Arcade '),
(2, 2, 'Php'),
(3, 2, 'Php'),
(4, 1, 'Jogos'),
(5, 5, 'Body');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_foruns`
--

CREATE TABLE `tb_foruns` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_foruns`
--

INSERT INTO `tb_foruns` (`id`, `nome`) VALUES
(1, 'Games e Geral'),
(2, 'Desenvolvimento Web '),
(3, 'post'),
(4, 'post'),
(5, 'HTML');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_forum.posts`
--
ALTER TABLE `tb_forum.posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_forum.topicos`
--
ALTER TABLE `tb_forum.topicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_foruns`
--
ALTER TABLE `tb_foruns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_forum.posts`
--
ALTER TABLE `tb_forum.posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_forum.topicos`
--
ALTER TABLE `tb_forum.topicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_foruns`
--
ALTER TABLE `tb_foruns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
