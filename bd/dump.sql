--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.5
-- Dumped by pg_dump version 9.5.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

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
-- Name: actividad; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE actividad (
    id integer NOT NULL,
    fecha date,
    actividad character varying(200),
    cedula character varying(25)
);


ALTER TABLE actividad OWNER TO grebo;

--
-- Name: actividad_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE actividad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE actividad_id_seq OWNER TO grebo;

--
-- Name: actividad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE actividad_id_seq OWNED BY actividad.id;


--
-- Name: asitencia; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE asitencia (
    id integer NOT NULL,
    fecha date,
    cedula character varying(25),
    hora character varying(20)
);


ALTER TABLE asitencia OWNER TO grebo;

--
-- Name: asitencia_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE asitencia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE asitencia_id_seq OWNER TO grebo;

--
-- Name: asitencia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE asitencia_id_seq OWNED BY asitencia.id;


--
-- Name: inasitencia; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE inasitencia (
    id integer NOT NULL,
    fecha date,
    hora character varying(20),
    cedula character varying(25),
    observacion text
);


ALTER TABLE inasitencia OWNER TO grebo;

--
-- Name: inasitencia_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE inasitencia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE inasitencia_id_seq OWNER TO grebo;

--
-- Name: inasitencia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE inasitencia_id_seq OWNED BY inasitencia.id;


--
-- Name: personal; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE personal (
    nombre character varying(100),
    apellido character varying(100),
    cedula character varying(25) NOT NULL,
    correo character varying(100),
    cargo character varying(100),
    fecha_n date,
    estatus integer
);


ALTER TABLE personal OWNER TO grebo;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY actividad ALTER COLUMN id SET DEFAULT nextval('actividad_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY asitencia ALTER COLUMN id SET DEFAULT nextval('asitencia_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY inasitencia ALTER COLUMN id SET DEFAULT nextval('inasitencia_id_seq'::regclass);


--
-- Name: actividad_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT actividad_pkey PRIMARY KEY (id);


--
-- Name: asitencia_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY asitencia
    ADD CONSTRAINT asitencia_pkey PRIMARY KEY (id);


--
-- Name: inasitencia_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY inasitencia
    ADD CONSTRAINT inasitencia_pkey PRIMARY KEY (id);


--
-- Name: personal_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (cedula);


--
-- Name: actividad_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT actividad_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: asitencia_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY asitencia
    ADD CONSTRAINT asitencia_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: inasitencia_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY inasitencia
    ADD CONSTRAINT inasitencia_cedula_fkey FOREIGN KEY (cedula) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


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

