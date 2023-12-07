-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2023 às 17:43
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

CREATE DATABASE godfield;

USE godfield;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `godfield`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artefato`
--

CREATE TABLE `artefato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `artefato`
--

INSERT INTO `artefato` (`id`, `nome`, `img`) VALUES
(26, 'God1', '6571f5290ab7a.png'),
(27, 'God 2', '6571f534b9b21.png'),
(28, 'God 3', '6571f53cd41c3.png'),
(29, 'God 4', '6571f545aca26.png'),
(30, 'God 5', '6571f54e5da90.png'),
(31, 'God 6', '6571f55a97268.png'),
(32, 'God 7', '6571f5620672e.png'),
(33, 'God 8', '6571f5687f09d.png'),
(34, 'God 9', '6571f56ecf36f.png'),
(35, 'God 10', '6571f576bf7a3.png'),
(36, 'God 11', '6571f57e1ad18.png'),
(37, 'God 12', '6571f58493f01.png'),
(38, 'God 13', '6571f58cb7491.png'),
(39, 'God 14', '6571f59333f3a.png'),
(40, 'God 15', '6571f59a2823f.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `isAdm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `isAdm`) VALUES
(2, 'admin', 'admin@a', 'senha123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_artefato`
--

CREATE TABLE `usuario_artefato` (
  `id` int(11) NOT NULL,
  `usuarioID` int(11) DEFAULT NULL,
  `artefatoID` int(11) DEFAULT NULL,
  `voto` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artefato`
--
ALTER TABLE `artefato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario_artefato`
--
ALTER TABLE `usuario_artefato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `artefatoID` (`artefatoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artefato`
--
ALTER TABLE `artefato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario_artefato`
--
ALTER TABLE `usuario_artefato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario_artefato`
--
ALTER TABLE `usuario_artefato`
  ADD CONSTRAINT `usuario_artefato_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_artefato_ibfk_2` FOREIGN KEY (`artefatoID`) REFERENCES `artefato` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
