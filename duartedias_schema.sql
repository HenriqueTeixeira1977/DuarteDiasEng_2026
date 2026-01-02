-- duartedias_schema.sql
CREATE DATABASE IF NOT EXISTS u588089239_duartediaseng CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE u588089239_duartediaseng;

-- tabela de usuários/admins
CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL,
  role VARCHAR(50) DEFAULT 'editor',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de leads / contatos
CREATE TABLE IF NOT EXISTS leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150),
  telefone VARCHAR(50),
  origem VARCHAR(100) DEFAULT 'site',
  serviço VARCHAR(150) DEFAULT NULL,
  mensagem TEXT,
  utm_source VARCHAR(100) DEFAULT NULL,
  utm_medium VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de posts (blog)
CREATE TABLE IF NOT EXISTS posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(250) NOT NULL,
  slug VARCHAR(300) NOT NULL UNIQUE,
  conteudo LONGTEXT,
  resumo VARCHAR(500),
  imagem VARCHAR(255),
  publicado TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de projetos / portfólio
CREATE TABLE IF NOT EXISTS projetos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(250) NOT NULL,
  slug VARCHAR(300) NOT NULL UNIQUE,
  descricao LONGTEXT,
  cliente VARCHAR(200),
  localizacao VARCHAR(200),
  imagem_capa VARCHAR(255),
  publicado TINYINT(1) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de imagens do projeto (galeria)
CREATE TABLE IF NOT EXISTS projeto_imagens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  projeto_id INT NOT NULL,
  arquivo VARCHAR(255),
  legenda VARCHAR(250),
  ordem INT DEFAULT 0,
  FOREIGN KEY (projeto_id) REFERENCES projetos(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de depoimentos
CREATE TABLE IF NOT EXISTS depoimentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150),
  cargo VARCHAR(150),
  texto TEXT,
  publicado TINYINT(1) DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- tabela de serviços
CREATE TABLE IF NOT EXISTS servicos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(200),
  slug VARCHAR(250) UNIQUE,
  descricao LONGTEXT,
  icone VARCHAR(100),
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- criar um admin inicial (senha: trocar depois)
INSERT INTO admins (nome, email, senha, role)
VALUES ('Admin Duarte', 'admin@duartediasengenharia.com.br', 
    -- gerar senha com password_hash('senha123', PASSWORD_DEFAULT) no PHP. Aqui um placeholder:
    '$2y$10$placeholderchangeme', 'admin');
