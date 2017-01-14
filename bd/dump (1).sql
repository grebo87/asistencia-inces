--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: sistema; Type: COMMENT; Schema: -; Owner: gnuxdar
--

COMMENT ON DATABASE sistema IS 'sistema de gestion de personal

INCES';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actividad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE actividad (
    id integer NOT NULL,
    fecha date,
    actividad character varying(200),
    cedula character varying(25)
);


ALTER TABLE public.actividad OWNER TO postgres;

--
-- Name: actividad_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actividad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actividad_id_seq OWNER TO postgres;

--
-- Name: actividad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE actividad_id_seq OWNED BY actividad.id;


--
-- Name: asitencia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE asitencia (
    id integer NOT NULL,
    fecha date,
    cedula character varying(25),
    hora character varying(20)
);


ALTER TABLE public.asitencia OWNER TO postgres;

--
-- Name: asitencia_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE asitencia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.asitencia_id_seq OWNER TO postgres;

--
-- Name: asitencia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE asitencia_id_seq OWNED BY asitencia.id;


--
-- Name: inasitencia; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE inasitencia (
    id integer NOT NULL,
    fecha date,
    hora character varying(20),
    cedula character varying(25),
    observacion text
);


ALTER TABLE public.inasitencia OWNER TO postgres;

--
-- Name: inasitencia_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE inasitencia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.inasitencia_id_seq OWNER TO postgres;

--
-- Name: inasitencia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE inasitencia_id_seq OWNED BY inasitencia.id;


--
-- Name: permisos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE permisos (
    id integer NOT NULL,
    cedula character varying(25),
    motivo text,
    inicio date,
    fin date,
    observacion text,
    tipo character varying(100)
);


ALTER TABLE public.permisos OWNER TO postgres;

--
-- Name: permisos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE permisos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permisos_id_seq OWNER TO postgres;

--
-- Name: permisos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE permisos_id_seq OWNED BY permisos.id;


--
-- Name: personal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE personal (
    nombre character varying(100),
    apellido character varying(100),
    cedula character varying(25) NOT NULL,
    correo character varying(100),
    cargo character varying(100),
    fecha_n date,
    cod_personal character varying(200),
    status character varying(100)
);


ALTER TABLE public.personal OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    id integer NOT NULL,
    login character varying(100),
    contrasena character varying(250),
    tipo integer,
    cedula_personal character varying(25),
    estatus integer
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_seq OWNED BY usuario.id;


--
-- Name: vacaciones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE vacaciones (
    id integer NOT NULL,
    cedula character varying(25),
    estado character varying(100),
    inicio date,
    fin date,
    observacion text
);


ALTER TABLE public.vacaciones OWNER TO postgres;

--
-- Name: vacaciones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE vacaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vacaciones_id_seq OWNER TO postgres;

--
-- Name: vacaciones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE vacaciones_id_seq OWNED BY vacaciones.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad ALTER COLUMN id SET DEFAULT nextval('actividad_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY asitencia ALTER COLUMN id SET DEFAULT nextval('asitencia_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY inasitencia ALTER COLUMN id SET DEFAULT nextval('inasitencia_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permisos ALTER COLUMN id SET DEFAULT nextval('permisos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id SET DEFAULT nextval('usuario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY vacaciones ALTER COLUMN id SET DEFAULT nextval('vacaciones_id_seq'::regclass);


--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: actividad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('actividad_id_seq', 21, true);


--
-- Data for Name: asitencia; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: asitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('asitencia_id_seq', 18, true);


--
-- Data for Name: inasitencia; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: inasitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('inasitencia_id_seq', 8, true);


--
-- Data for Name: permisos; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: permisos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('permisos_id_seq', 4, true);


--
-- Data for Name: personal; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO personal VALUES ('meryuris', 'plaza', '20125478', 'meryuris1992@gmail.com', 'Administrativo', '1992-06-18', 'merys2000', 'Activo');


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuario VALUES (12, 'meryuris', '2012', 1, '20125478', 1);


--
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_seq', 12, true);


--
-- Data for Name: vacaciones; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO vacaciones VALUES (7, '20125478', 'Pendiente', '2016-12-08', '2016-12-22', 'vacaciones pendientes');


--
-- Name: vacaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('vacaciones_id_seq', 7, true);


--
-- Name: actividad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT actividad_pkey PRIMARY KEY (id);


--
-- Name: asitencia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY asitencia
    ADD CONSTRAINT asitencia_pkey PRIMARY KEY (id);


--
-- Name: inasitencia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY inasitencia
    ADD CONSTRAINT inasitencia_pkey PRIMARY KEY (id);


--
-- Name: permisos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permisos
    ADD CONSTRAINT permisos_pkey PRIMARY KEY (id);

ALTER TABLE permisos CLUSTER ON permisos_pkey;


--
-- Name: personal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (cedula);


--
-- Name: usuario_login_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_login_key UNIQUE (login);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- Name: vacaciones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY vacaciones
    ADD CONSTRAINT vacaciones_pkey PRIMARY KEY (id);


--
-- Name: actividad_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT actividad_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: asitencia_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY asitencia
    ADD CONSTRAINT asitencia_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: inasitencia_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY inasitencia
    ADD CONSTRAINT inasitencia_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: usuario_cedula_personal_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_cedula_personal_fkey FOREIGN KEY (cedula_personal) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: vacaciones_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY vacaciones
    ADD CONSTRAINT vacaciones_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

