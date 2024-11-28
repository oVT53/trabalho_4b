-- Cria o banco de dados
CREATE DATABASE loja_brinquedos;

-- Usa o banco de dados criado
USE loja_brinquedos;

-- Tabela para os produtos
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Tabela para os usuários
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insere produtos de exemplo
INSERT INTO products (name, description, price, image) VALUES
('Carrinho de Controle Remoto', 'Carrinho super veloz com controle remoto.', 120.50, 'carrinhodecontroleremoto.jpg'),
('Boneca de Pano', 'Boneca feita à mão, ideal para crianças.', 45.90, 'bonecadepano.png'),
('Quebra-cabeça 500 peças', 'Desafie-se com este quebra-cabeça.', 39.99, 'quebracabecas.jpg'),
('Jogo de Tabuleiro', 'Diversão garantida para a família.', 99.00, 'jogosdetabuleiro.jpeg'),
('Pelúcia Urso', 'Urso de pelúcia macio e fofinho.', 80.00, 'ursopelucia.jpg');

-- Insere um usuário de exemplo
INSERT INTO users (username, password) VALUES
('admin', MD5('123456')); -- O hash MD5 de '123456'
