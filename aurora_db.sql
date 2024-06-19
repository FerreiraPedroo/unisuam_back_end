CREATE SCHEMA `aurora` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE aurora;

CREATE TABLE `passagem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `origem` VARCHAR(45) NULL,
  `destino` VARCHAR(45) NULL,
  `data_ida` DATETIME NULL,
  `data_volta` DATETIME NULL,
  `passagem_valor` DECIMAL NULL,
  `taxa_embarque_valor` DECIMAL NULL,
  `taxa_servico_valor` DECIMAL NULL,
  `companhia_aerea` VARCHAR(45) NULL,
  `foto` LONGTEXT NULL,
  `descricao` LONGTEXT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `hotel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `endereco` VARCHAR(128) NULL,
  `diaria_valor` DECIMAL NULL,
  `incluso` LONGTEXT NULL,
  `descricao` LONGTEXT NULL,
  `classificacao` INT NULL,
  `fotos` LONGTEXT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `veiculo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `marca` VARCHAR(45) NULL,
  `adicionais_carro` VARCHAR(255) NULL,
  `adicionais_extra` LONGTEXT NULL,
  `tipo_veiculo` VARCHAR(45) NULL,
  `diaria_valor` DECIMAL NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_master` VARCHAR(6) NULL DEFAULT 'comum',
  `status` VARCHAR(7) NULL DEFAULT 'ativo',
  `nome_completo` VARCHAR(100) NOT NULL,
  `data_nascimento` DATETIME NULL,
  `telefone_fixo` VARCHAR(45) NULL,
  `telefone_celular` VARCHAR(45) NULL,
  `cpf` VARCHAR(11) NULL,
  `sexo` VARCHAR(10) NULL,
  `nome_mae` VARCHAR(100) NULL,
  `endereco` VARCHAR(100) NULL,
  `foto` VARCHAR(100) NULL DEFAULT 'user.png',
  `cep` VARCHAR(9) NULL,
  `login` VARCHAR(45) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `usuarios_cookies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuarios_id` INT NOT NULL,
  `cookie` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `logger` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NULL,
  `data` VARCHAR(20) NOT NULL,
  `ip` VARCHAR(20) NOT NULL,
  `acao` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO
  `usuarios` (
    `id`,
    `usuario_master`,
    `status`,
    `nome_completo`,
    `login`,
    `email`,
    `senha`,
    `data_nascimento`,
    `nome_mae`,
    `cep`
  )
VALUES
  (
    '1',
    'master',
    'ativo',
    'Pedro Henrique',
    'master',
    'master@master.com',
    'master',
    '1983/05/30',
    'Maria',
    '21000-000'
  ),
  (
    '2',
    'comum',
    'ativo',
    'Wesley Safadão',
    'wes',
    'wes@master.com',
    '12345678',
    '1983/05/30',
    'Maria',
    '21000-000'
  ),
  (
    '3',
    'comum',
    'ativo',
    'Carla Freitas',
    'car',
    'car@master.com',
    '12345678',
    '1983/05/30',
    'Maria',
    '21000-000'
  ),
  (
    '4',
    'comum',
    'ativo',
    'Guilherme',
    'gui',
    'gui@master.com',
    '12345678',
    '1983/05/30',
    'Maria',
    '21000-000'    
  ),
  (
    '5',
    'master',
    'ativo',
    'Taiza Reis',
    'master',
    'tai@master.com',
    'master',
    '1983/05/30',
    'Maria',
    '21000-000'
  );

INSERT INTO
  `passagem` (
    `id`,
    `nome`,
    `origem`,
    `destino`,
    `data_ida`,
    `data_volta`,
    `passagem_valor`,
    `taxa_embarque_valor`,
    `taxa_servico_valor`,
    `companhia_aerea`,
    `foto`,
    `descricao`
  )
VALUES
  (
    8,
    'Islândia',
    'Rio de Janeiro',
    'Islândia',
    '2024-10-05 00:00:00',
    '2024-11-05 00:00:00',
    1583,
    56,
    30,
    'GOL',
    'destinos/islandia-aurora-boreal/001.jpg,destinos/islandia-aurora-boreal/002.webp,destinos/islandia-aurora-boreal/004.webp',
    'A Islândia, com sua paisagem inóspita e deslumbrante, é o local perfeito para presenciar a mágica Aurora Boreal, onde o céu se ilumina em uma dança hipnotizante de luzes verdes, rosas e roxas nas longas noites de inverno.'
  ),
  (
    9,
    'Turquia',
    'Rio de Janeiro',
    'Turquia',
    '2025-05-01 00:00:00',
    '2024-05-30 00:00:00',
    6000,
    120,
    39,
    'GOL',
    'destinos/turquia-capadocia/001.jpg,destinos/turquia-capadocia/003.webp,destinos/turquia-capadocia/004.jpg',
    'A Turquia, por sua vez, encanta na Capadócia, onde balões de ar quente sobrevoam ao amanhecer um cenário surreal de formações rochosas e vales que parecem ter saído de um conto de fadas.'
  ),
  (
    10,
    'Paris',
    'Rio de Janeiro',
    'Paris',
    '2025-06-03 00:00:00',
    '2024-07-10 00:00:00',
    4500,
    80,
    39,
    'TAM',
    'destinos/paris/001.webp,destinos/paris/002.jpg,destinos/paris/003.jpg',
    'Paris, a Cidade Luz, continua a seduzir com sua atmosfera romântica, repleta de marcos icônicos como a Torre Eiffel, o Louvre e charmosos cafés que pontuam suas ruas históricas.'
  ),
  (
    4,
    'Roma',
    'Rio de Janeiro',
    'Roma',
    '2025-06-03 00:00:00',
    '2024-07-10 00:00:00',
    4500,
    80,
    39,
    'TAM',
    'destinos/italia/001.jpg,destinos/italia/002.jpg,destinos/italia/003.jpg',
    'Na Itália, cada canto revela uma nova faceta da sua rica herança cultural e artística, desde os monumentos antigos de Roma até as paisagens idílicas da Toscana e a vibrante vida nas ruas de Florença e Veneza.'
  ),
  (
    5,
    'Grécia',
    'Rio de Janeiro',
    'Grécia',
    '2025-06-03 00:00:00',
    '2024-07-10 00:00:00',
    4500,
    80,
    39,
    'TAM',
    'destinos/grecia-santorini/001.jpg,destinos/grecia-santorini/002.jpg,destinos/grecia-santorini/003.avif',
    'A Grécia, com a ilha de Santorini, é sinônimo de vistas deslumbrantes do mar Egeu, com suas casas brancas e cúpulas azuis, que proporcionam alguns dos mais belos pores do sol do mundo.'
  ),
  (
    6,
    'Amsterdã',
    'Rio de Janeiro',
    'Amsterdã',
    '2025-06-03 00:00:00',
    '2024-07-10 00:00:00',
    4500,
    80,
    39,
    'TAM',
    'destinos/amsterda/001.webp,destinos/amsterda/002.webp,destinos/amsterda/003.webp',
    'Amsterdã, nos Países Baixos, combina história rica e modernidade com seus canais pitorescos, museus renomados como o Rijksmuseum e o Museu Van Gogh, além de uma vibrante cultura de bicicletas que torna a exploração da cidade agradável e sustentável.'
  ),
  (
    7,
    'Chile',
    'Rio de Janeiro',
    'Chile',
    '2025-06-03 00:00:00',
    '2024-07-10 00:00:00',
    4500,
    80,
    39,
    'TAM',
    'destinos/chile/001.jpg,destinos/chile/003.jpg,destinos/chile/002.jpg',
    'O Chile oferece o impressionante Deserto do Atacama, um dos lugares mais áridos do planeta, onde a combinação de vastos salares, gêiseres e um céu incrivelmente claro torna a observação das estrelas uma experiência inesquecível.'
  );