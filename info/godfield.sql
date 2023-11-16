-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2023 às 19:22
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

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
(11, 'god1', '65565aab316b4.png'),
(12, 'god2', '65565ab2b9ea0.png'),
(13, 'god3', '65565aba467d2.png'),
(14, 'god4', '65565ac0f221c.png'),
(15, 'god5', '65565ac95d2b3.png'),
(16, 'god6', '65565ad136a51.png'),
(17, 'god7', '65565adba42d4.png'),
(18, 'god8', '65565b03016c0.png'),
(19, 'god9', '65565b0a7c461.png'),
(20, 'god10', '65565b19dfab6.png'),
(21, 'go11', '65565b21aae33.png'),
(22, 'god12', '65565b2bbe285.png'),
(23, 'god13', '65565b343d675.png'),
(24, 'god14', '65565b3c125f2.png'),
(25, 'god15', '65565b49c3cb0.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario_artefato`
--
ALTER TABLE `usuario_artefato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
