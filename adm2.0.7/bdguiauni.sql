-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/04/2025 às 04:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdguiauni`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntaquestionario`
--

CREATE TABLE `perguntaquestionario` (
  `idPerguntaQuestionario` int(11) NOT NULL,
  `perguntaQuestionario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `questionario`
--

CREATE TABLE `questionario` (
  `idPerguntaQuestionario` int(11) DEFAULT NULL,
  `idRespostaQuestionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(50) DEFAULT NULL,
  `cpfAdmin` varchar(11) DEFAULT NULL,
  `emailAdmin` varchar(50) DEFAULT NULL,
  `senhaAdmin` varchar(20) DEFAULT NULL,
  `TokenAdmin` varchar(16) DEFAULT NULL,
  `imagemAdmin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `nomeAdmin`, `cpfAdmin`, `emailAdmin`, `senhaAdmin`, `TokenAdmin`, `imagemAdmin`) VALUES
(7, 'afdsfsad', '7867685437', 'gdsafcxvbxvbvfdgfds@fgdagd.cd', 'A312#hgfhf', '26d9b194bda237ac', '04a94ed191a983741db43a5fd4d64af5.jpg'),
(8, 'teste1', '123456789', 'adm1@teste.c', '1234_Abcd', '56654c316bc036d6', 'eaf2726eea0388f98de141d164f2f029.jpg'),
(9, 'teste2', '0987654321', 'adm2@teste.c', '1234_Abcd', '9791ee2d4b70eec9', '9bb2ecf0809228a85a6be189328ca065.jpg'),
(10, '7', '7867685437', 'gdsafcxvbxvbvfdgfds@fgdagd.cd', 'A312#hgfhf', 'dc67ebdb6f2c42ef', 'b9e81a5b3f05227c8d38eae77dc991d0.jpg'),
(13, 'cavalo', '312.312.312', '4324234123@341423414.com', '!321dsaDS', '9491087b5f5b1a47', 'a83c57c9530e67a02d4f02a76c658d3f.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `descCategoria` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcurso`
--

CREATE TABLE `tbcurso` (
  `idCurso` int(11) NOT NULL,
  `nomeCurso` varchar(50) DEFAULT NULL,
  `videoCurso` varchar(200) DEFAULT NULL,
  `cargaHorariaCurso` int(11) DEFAULT NULL,
  `disciplinaCurso` varchar(50) DEFAULT NULL,
  `periodoCurso` int(11) DEFAULT NULL,
  `modalidadeCurso` varchar(30) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idImagemCurso` int(11) DEFAULT NULL,
  `idTextoCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcurso`
--

INSERT INTO `tbcurso` (`idCurso`, `nomeCurso`, `videoCurso`, `cargaHorariaCurso`, `disciplinaCurso`, `periodoCurso`, `modalidadeCurso`, `idCategoria`, `idImagemCurso`, `idTextoCurso`) VALUES
(1, 'matematica', '[value-4]', 0, '[value-7]', 0, '[value-9]', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `idDenuncia` int(11) NOT NULL,
  `descDenuncia` varchar(500) DEFAULT NULL,
  `idTipoDenuncia` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbenderecoinstituicao`
--

CREATE TABLE `tbenderecoinstituicao` (
  `idEnderecoInstituicao` int(11) NOT NULL,
  `logradouroEnderecoInstituicao` varchar(100) DEFAULT NULL,
  `numeroEnderecoInstituicao` varchar(10) DEFAULT NULL,
  `cepEnderecoInstituicao` varchar(8) DEFAULT NULL,
  `bairroEnderecoInstituicao` varchar(50) DEFAULT NULL,
  `cidadeEnderecoInstituicao` varchar(50) DEFAULT NULL,
  `estadoEnderecoInstituicao` varchar(50) DEFAULT NULL,
  `complementoEnderecoInstituicao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbenderecoinstituicao`
--

INSERT INTO `tbenderecoinstituicao` (`idEnderecoInstituicao`, `logradouroEnderecoInstituicao`, `numeroEnderecoInstituicao`, `cepEnderecoInstituicao`, `bairroEnderecoInstituicao`, `cidadeEnderecoInstituicao`, `estadoEnderecoInstituicao`, `complementoEnderecoInstituicao`) VALUES
(3, 'rua cavalo', '231', '432423', 'cavalo2', 'cav', 'alo', ''),
(4, 'rua cavalo', '231', '432423', 'cavalo2', 'cav', 'alo', ''),
(5, 'fsdfsadf', '3241234', '43412', 'fdsafasdfd', 'fsdfasdf', 'sdfsdfsafsadf', ''),
(6, 'fsdafsdaf', '423432', '44234', 'fdsfadsf', 'ffsdafsdafsd', 'fsadfasdf', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfavorito`
--

CREATE TABLE `tbfavorito` (
  `idFavorito` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idInstituicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfoneinstituticao`
--

CREATE TABLE `tbfoneinstituticao` (
  `idFoneInstituicao` int(11) NOT NULL,
  `numeroFoneInstituicao` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfoneinstituticao`
--

INSERT INTO `tbfoneinstituticao` (`idFoneInstituicao`, `numeroFoneInstituicao`) VALUES
(3, '4324142'),
(4, '4324142'),
(5, '4324142'),
(6, '4532455');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbimagemcurso`
--

CREATE TABLE `tbimagemcurso` (
  `idImagemCurso` int(11) NOT NULL,
  `nomeImagemCurso` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbimageminstituicao`
--

CREATE TABLE `tbimageminstituicao` (
  `idImagemInstituicao` int(11) NOT NULL,
  `nomeImagemInstituicao` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbinstituicao`
--

CREATE TABLE `tbinstituicao` (
  `idInstituicao` int(11) NOT NULL,
  `nomeInstituicao` varchar(50) DEFAULT NULL,
  `emailInstituicao` varchar(50) DEFAULT NULL,
  `senhaInstituicao` varchar(255) DEFAULT NULL,
  `videoInstituicao` varchar(200) DEFAULT NULL,
  `linkInstituicao` varchar(255) DEFAULT NULL,
  `statusInstituicao` tinyint(1) NOT NULL,
  `cnpjInstituicao` varchar(18) DEFAULT NULL,
  `idImagemInstituicao` int(11) DEFAULT NULL,
  `idFoneInstituicao` int(11) DEFAULT NULL,
  `idEnderecoInstituicao` int(11) DEFAULT NULL,
  `idTipoInstituicao` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `idTextoInstituicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbinstituicao`
--

INSERT INTO `tbinstituicao` (`idInstituicao`, `nomeInstituicao`, `emailInstituicao`, `senhaInstituicao`, `videoInstituicao`, `linkInstituicao`, `statusInstituicao`, `cnpjInstituicao`, `idImagemInstituicao`, `idFoneInstituicao`, `idEnderecoInstituicao`, `idTipoInstituicao`, `idCurso`, `idTextoInstituicao`) VALUES
(5, 'cavalo', 'ale@al', NULL, '', NULL, 0, NULL, NULL, 0, 0, 0, 1, NULL),
(6, 'dfasdfasdfasdf', '4324234123@341423414', NULL, 'video', NULL, 0, NULL, NULL, 0, 1, 1, 1, NULL),
(7, 'dfasdfasdfasdf', 'fdfsdffsd@fadsfsad', NULL, '', NULL, 0, NULL, NULL, 5, 5, 0, 1, NULL),
(8, 'alexandre', 'fsdfasdfs@fdsfsda', NULL, '', NULL, 0, NULL, NULL, 6, 6, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpost`
--

CREATE TABLE `tbpost` (
  `idPost` int(11) NOT NULL,
  `comentarioPost` varchar(400) DEFAULT NULL,
  `idIntituicao` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbrespostaquestionario`
--

CREATE TABLE `tbrespostaquestionario` (
  `idRespostaQuestionario` int(11) NOT NULL,
  `respostaQuestionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtelefoneusuario`
--

CREATE TABLE `tbtelefoneusuario` (
  `idTelefoneUsuario` int(11) NOT NULL,
  `numeroTelefoneUsuario` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtextocurso`
--

CREATE TABLE `tbtextocurso` (
  `idTextoCurso` int(11) NOT NULL,
  `contTexto` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtextoinstituicao`
--

CREATE TABLE `tbtextoinstituicao` (
  `idTextoInstituicao` int(11) NOT NULL,
  `contTextoInstituicao` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtipodenuncia`
--

CREATE TABLE `tbtipodenuncia` (
  `idTipoDenuncia` int(11) NOT NULL,
  `descTipoDenuncia` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtipoinstituicao`
--

CREATE TABLE `tbtipoinstituicao` (
  `idTipoInstituicao` int(11) NOT NULL,
  `descTipoInstituicao` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtipoinstituicao`
--

INSERT INTO `tbtipoinstituicao` (`idTipoInstituicao`, `descTipoInstituicao`) VALUES
(2, 'Publica'),
(3, 'Publica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) DEFAULT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `senhaUsuario` varchar(20) DEFAULT NULL,
  `imagemUsuario` varchar(200) DEFAULT NULL,
  `TokenUsuario` varchar(16) DEFAULT NULL,
  `idTelefoneUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `perguntaquestionario`
--
ALTER TABLE `perguntaquestionario`
  ADD PRIMARY KEY (`idPerguntaQuestionario`);

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbcurso`
--
ALTER TABLE `tbcurso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`);

--
-- Índices de tabela `tbenderecoinstituicao`
--
ALTER TABLE `tbenderecoinstituicao`
  ADD PRIMARY KEY (`idEnderecoInstituicao`);

--
-- Índices de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD PRIMARY KEY (`idFavorito`);

--
-- Índices de tabela `tbfoneinstituticao`
--
ALTER TABLE `tbfoneinstituticao`
  ADD PRIMARY KEY (`idFoneInstituicao`);

--
-- Índices de tabela `tbimagemcurso`
--
ALTER TABLE `tbimagemcurso`
  ADD PRIMARY KEY (`idImagemCurso`);

--
-- Índices de tabela `tbimageminstituicao`
--
ALTER TABLE `tbimageminstituicao`
  ADD PRIMARY KEY (`idImagemInstituicao`);

--
-- Índices de tabela `tbinstituicao`
--
ALTER TABLE `tbinstituicao`
  ADD PRIMARY KEY (`idInstituicao`);

--
-- Índices de tabela `tbpost`
--
ALTER TABLE `tbpost`
  ADD PRIMARY KEY (`idPost`);

--
-- Índices de tabela `tbrespostaquestionario`
--
ALTER TABLE `tbrespostaquestionario`
  ADD PRIMARY KEY (`idRespostaQuestionario`);

--
-- Índices de tabela `tbtelefoneusuario`
--
ALTER TABLE `tbtelefoneusuario`
  ADD PRIMARY KEY (`idTelefoneUsuario`);

--
-- Índices de tabela `tbtextocurso`
--
ALTER TABLE `tbtextocurso`
  ADD PRIMARY KEY (`idTextoCurso`);

--
-- Índices de tabela `tbtextoinstituicao`
--
ALTER TABLE `tbtextoinstituicao`
  ADD PRIMARY KEY (`idTextoInstituicao`);

--
-- Índices de tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  ADD PRIMARY KEY (`idTipoDenuncia`);

--
-- Índices de tabela `tbtipoinstituicao`
--
ALTER TABLE `tbtipoinstituicao`
  ADD PRIMARY KEY (`idTipoInstituicao`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbenderecoinstituicao`
--
ALTER TABLE `tbenderecoinstituicao`
  MODIFY `idEnderecoInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  MODIFY `idFavorito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfoneinstituticao`
--
ALTER TABLE `tbfoneinstituticao`
  MODIFY `idFoneInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbimagemcurso`
--
ALTER TABLE `tbimagemcurso`
  MODIFY `idImagemCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbimageminstituicao`
--
ALTER TABLE `tbimageminstituicao`
  MODIFY `idImagemInstituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbinstituicao`
--
ALTER TABLE `tbinstituicao`
  MODIFY `idInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbtextocurso`
--
ALTER TABLE `tbtextocurso`
  MODIFY `idTextoCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtextoinstituicao`
--
ALTER TABLE `tbtextoinstituicao`
  MODIFY `idTextoInstituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  MODIFY `idTipoDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipoinstituicao`
--
ALTER TABLE `tbtipoinstituicao`
  MODIFY `idTipoInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
