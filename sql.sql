-- Database: detran

-- DROP DATABASE detran;

CREATE DATABASE detran
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

-- Table: public.det_categorias

-- DROP TABLE public.det_categorias;

CREATE TABLE public.det_categorias
(
    id integer NOT NULL DEFAULT nextval('det_categorias_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    CONSTRAINT categoria_pk PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_categorias
    OWNER to postgres;


-- Table: public.det_noticias

-- DROP TABLE public.det_noticias;

CREATE TABLE public.det_noticias
(
    id integer NOT NULL DEFAULT nextval('det_noticias_id_seq'::regclass),
    titulo character varying COLLATE pg_catalog."default" NOT NULL,
    texto character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    categoria_id integer,
    ativo boolean DEFAULT true,
    imagem character varying COLLATE pg_catalog."default",
    CONSTRAINT noticia_pk PRIMARY KEY (id),
    CONSTRAINT categoria_fk FOREIGN KEY (categoria_id)
        REFERENCES public.det_categorias (id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_noticias
    OWNER to postgres;


-- Table: public.det_cursos

-- DROP TABLE public.det_cursos;

CREATE TABLE public.det_cursos
(
    id integer NOT NULL DEFAULT nextval('cursos_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    sigla character varying COLLATE pg_catalog."default" NOT NULL,
    fundamentacao character varying COLLATE pg_catalog."default" NOT NULL,
    requisito character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    CONSTRAINT curso_pk PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_cursos
    OWNER to postgres;


-- Table: public.det_avaliacoes

-- DROP TABLE public.det_avaliacoes;

CREATE TABLE public.det_avaliacoes
(
    id integer NOT NULL DEFAULT nextval('avaliacoes_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    sigla character varying COLLATE pg_catalog."default" NOT NULL,
    tempo_prova integer NOT NULL,
    tempo_tdh integer NOT NULL,
    total_questoes integer NOT NULL,
    total_alternativas integer NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    curso_id integer,
    CONSTRAINT avaliacao_pk PRIMARY KEY (id),
    CONSTRAINT curso_fk FOREIGN KEY (curso_id)
        REFERENCES public.det_cursos (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_avaliacoes
    OWNER to postgres;


-- Table: public.det_disciplinas

-- DROP TABLE public.det_disciplinas;

CREATE TABLE public.det_disciplinas
(
    id integer NOT NULL DEFAULT nextval('disciplinas_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    sigla character varying COLLATE pg_catalog."default" NOT NULL,
    descricao character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    curso_id integer,
    CONSTRAINT disciplina_pk PRIMARY KEY (id),
    CONSTRAINT curso_fk FOREIGN KEY (curso_id)
        REFERENCES public.det_cursos (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_disciplinas
    OWNER to postgres;


-- Table: public.det_disciplinas_avaliacao

-- DROP TABLE public.det_disciplinas_avaliacao;

CREATE TABLE public.det_disciplinas_avaliacao
(
    id integer NOT NULL DEFAULT nextval('disciplinas_avaliacao_id_seq'::regclass),
    questoes integer NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    disciplina_id integer,
    avaliacao_id integer,
    CONSTRAINT disciplina_avaliacao_pk PRIMARY KEY (id),
    CONSTRAINT avaliacao_fk FOREIGN KEY (avaliacao_id)
        REFERENCES public.det_avaliacoes (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT disciplina_fk FOREIGN KEY (disciplina_id)
        REFERENCES public.det_disciplinas (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_disciplinas_avaliacao
    OWNER to postgres;


-- Table: public.det_perfis

-- DROP TABLE public.det_perfis;

CREATE TABLE public.det_perfis
(
    id integer NOT NULL DEFAULT nextval('perfis_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    codigo character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    curso_id integer,
    CONSTRAINT perfil_pk PRIMARY KEY (id),
    CONSTRAINT curso_fk FOREIGN KEY (curso_id)
        REFERENCES public.det_cursos (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_perfis
    OWNER to postgres;


-- Table: public.det_competencias

-- DROP TABLE public.det_competencias;

CREATE TABLE public.det_competencias
(
    id integer NOT NULL DEFAULT nextval('competencias_id_seq'::regclass),
    nome character varying COLLATE pg_catalog."default" NOT NULL,
    codigo character varying COLLATE pg_catalog."default" NOT NULL,
    slug character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    curso_id integer,
    CONSTRAINT competencia_pk PRIMARY KEY (id),
    CONSTRAINT curso_fk FOREIGN KEY (curso_id)
        REFERENCES public.det_cursos (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_competencias
    OWNER to postgres;


-- Table: public.det_questoes

-- DROP TABLE public.det_questoes;

CREATE TABLE public.det_questoes
(
    id integer NOT NULL DEFAULT nextval('det_questoes_id_seq'::regclass),
    enunciado character varying COLLATE pg_catalog."default" NOT NULL,
    justificativa character varying COLLATE pg_catalog."default" NOT NULL,
    dificuldade integer NOT NULL,
    proficiencia integer NOT NULL,
    imagem character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    perfil_id integer,
    disciplina_id integer,
    competencia_id integer,
    avaliacao_id integer,
    CONSTRAINT questao_pk PRIMARY KEY (id),
    CONSTRAINT avaliacao_fk FOREIGN KEY (avaliacao_id)
        REFERENCES public.det_avaliacoes (id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE NO ACTION,
    CONSTRAINT competencia_fk FOREIGN KEY (competencia_id)
        REFERENCES public.det_competencias (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT disciplina_fk FOREIGN KEY (disciplina_id)
        REFERENCES public.det_disciplinas (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT perfil_fk FOREIGN KEY (perfil_id)
        REFERENCES public.det_perfis (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_questoes
    OWNER to postgres;


-- Table: public.det_alternativas

-- DROP TABLE public.det_alternativas;

CREATE TABLE public.det_alternativas
(
    id integer NOT NULL DEFAULT nextval('det_alternativas_id_seq'::regclass),
    descricao character varying COLLATE pg_catalog."default" NOT NULL,
    data_criacao timestamp without time zone DEFAULT now(),
    data_modificacao timestamp without time zone,
    usuario_id integer,
    ativo boolean DEFAULT true,
    questao_id integer,
    gabarito integer,
    CONSTRAINT questao_alternativa_pk PRIMARY KEY (id),
    CONSTRAINT questao_fk FOREIGN KEY (questao_id)
        REFERENCES public.det_questoes (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.det_alternativas
    OWNER to postgres;