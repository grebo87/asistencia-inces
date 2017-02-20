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
    entrada time without time zone,
    salida time without time zone
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
    cedula character varying(25),
    observacion text,
    observacion2 text,
    type character varying(50)
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
-- Name: permisos; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE permisos (
    id integer NOT NULL,
    cedula character varying(25),
    motivo text,
    inicio date,
    fin date,
    observacion text,
    tipo character varying(50)
);


ALTER TABLE permisos OWNER TO grebo;

--
-- Name: permisos_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE permisos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE permisos_id_seq OWNER TO grebo;

--
-- Name: permisos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE permisos_id_seq OWNED BY permisos.id;


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
    cod_personal character varying(200),
    status character varying(100)
);


ALTER TABLE personal OWNER TO grebo;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE usuario (
    id integer NOT NULL,
    login character varying(100),
    contrasena character varying(250),
    tipo integer,
    cedula_personal character varying(25),
    estatus integer
);


ALTER TABLE usuario OWNER TO grebo;

--
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_seq OWNER TO grebo;

--
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE usuario_id_seq OWNED BY usuario.id;


--
-- Name: vacaciones; Type: TABLE; Schema: public; Owner: grebo
--

CREATE TABLE vacaciones (
    id integer NOT NULL,
    cedula character varying(25),
    estado character varying(100),
    inicio date,
    fin date,
    observacion text
);


ALTER TABLE vacaciones OWNER TO grebo;

--
-- Name: vacaciones_id_seq; Type: SEQUENCE; Schema: public; Owner: grebo
--

CREATE SEQUENCE vacaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE vacaciones_id_seq OWNER TO grebo;

--
-- Name: vacaciones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grebo
--

ALTER SEQUENCE vacaciones_id_seq OWNED BY vacaciones.id;


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
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY permisos ALTER COLUMN id SET DEFAULT nextval('permisos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY usuario ALTER COLUMN id SET DEFAULT nextval('usuario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY vacaciones ALTER COLUMN id SET DEFAULT nextval('vacaciones_id_seq'::regclass);


--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY actividad (id, fecha, actividad, cedula) FROM stdin;
4	2000-12-12	gfdsgfdgfdgfdgfdgfdgfgfd	18414472
6	2016-11-24	09:45:31</br>registro un personal  	18414472
7	2016-11-24	10:19:27</br>busco un dato personal  	18414472
8	2016-11-24	10:19:32</br>busco un dato personal  	18414472
9	2016-11-26	06:31:34</br>busco un dato personal  	18414472
10	2016-11-29	04:11:13</br>registro un personal  	18414472
\.


--
-- Name: actividad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('actividad_id_seq', 20, true);


--
-- Data for Name: asitencia; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY asitencia (id, fecha, cedula, entrada, salida) FROM stdin;
27	2017-01-15	12345678	20:03:44	20:05:24
28	1987-04-23	12345678	\N	\N
29	2017-01-15	21123456	22:13:10	22:16:02
33	2017-01-22	21123456	15:36:17	15:36:33
34	2017-01-22	52353	16:00:01	\N
35	2017-01-22	676	16:00:52	\N
46	2017-01-22	12345678	16:34:40	16:38:26
47	2017-01-22	18414472	16:48:38	\N
32	2017-01-22	20125478	15:35:47	17:02:35
49	2017-01-23	18414472	14:40:44	14:48:07
50	2017-01-23	12345678	16:44:49	\N
\.


--
-- Name: asitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('asitencia_id_seq', 50, true);


--
-- Data for Name: inasitencia; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY inasitencia (id, fecha, cedula, observacion, observacion2, type) FROM stdin;
1	2016-11-26	18414472	Reposo Medico	\N	\N
4	2016-12-04	20125478	Reposo Medico	\N	\N
5	2016-12-04	20125478	Inasistencia	\N	\N
6	2016-12-04	20125478	Observacion	\N	\N
8	2017-01-15	21123456	Retraso Injustificada	\N	\N
9	2017-01-15	21123456	Inasistencia	\N	\N
13	2017-01-22	12345678	Reposo Medico		justificada
14	2017-01-22	12345678	Inasistencia		injustificada 
11	2017-01-22	12345678	Inasistencia		injustificada
10	2017-01-22	12345678	Observacion	gdsgdsfgfdsgdsfgsdfg	injustificada
7	2016-12-16	12345678	Inasistencia	\N	injustificada
3	2016-12-04	12345678	Retraso Injustificada	\N	injustificada
2	2016-12-03	12345678	Reposo Medico	\N	justificada
\.


--
-- Name: inasitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('inasitencia_id_seq', 14, true);


--
-- Data for Name: permisos; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY permisos (id, cedula, motivo, inicio, fin, observacion, tipo) FROM stdin;
1	18414472	safgedgshtfjygkkujhgfasdhfgkjhgfdsasdfgh	2016-12-10	2016-12-22	gdhfjgkjgfhdgsadf	\N
2	20125478	medico	2016-12-09	2016-12-16	dfdsffb	\N
3	18414472	gregregergeg	2017-01-01	2017-01-31	regergregreg	anios
4	12345678	grgregreg	2017-01-01	2017-01-04		dias
\.


--
-- Name: permisos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('permisos_id_seq', 4, true);


--
-- Data for Name: personal; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY personal (nombre, apellido, cedula, correo, cargo, fecha_n, cod_personal, status) FROM stdin;
jesus	prada	12345678	jesus.prada@gmail.com	Administrativo	2016-11-18	\N	\N
Customizable 24hour migration	gfdgfdg	52353	dfdsfsdfd	Administrativo	2016-12-17	32432t543	
meryuris	plaza	20125478	meryuris1992@gmail.com	Docente	1992-06-18	2134	Activo
gfdgdrg	gfdgfdg	676	a@a.a	Docente	2017-01-01	fewfewf	Jubilado
egewgege	wgewgewg	ewgewgewgew	ewgegewgegege	Docente	2016-12-29	gwegewgewg	Jubilado
gregorio	boada	18414472	grebo87@gmail.com	Administrativo	1987-04-16	grebo546	Jubilado
maria	marcano	21123456	meryuris@gmail.com	Docente	2012-06-20	2135	Activo
\.


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY usuario (id, login, contrasena, tipo, cedula_personal, estatus) FROM stdin;
5	dsfgdgdgdg	dgdgdsg	0	12345678	0
1	grebo	grebo123123	1	18414472	1
2	sdsadsadsd	sadsadsa	1	18414472	1
8	mm	mm	1	20125478	1
\.


--
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('usuario_id_seq', 8, true);


--
-- Data for Name: vacaciones; Type: TABLE DATA; Schema: public; Owner: grebo
--

COPY vacaciones (id, cedula, estado, inicio, fin, observacion) FROM stdin;
1	12345678	Tomada	2016-12-24	2016-12-10	hbdgrgregergreg
2	12345678	Tomada	2016-12-10	2016-12-10	jbjkebfjskdjfkdv\r\nrg\r\nreg\r\nre\r\ng\r\ner\r\nge\r\nrg\r\ne\r\ng\r\ne\r\ng
3	20125478	Tomada	2016-12-09	2016-12-15	jdvg
4	20125478	Pendiente	2016-12-16	2016-12-30	vacaciones pendientes
5	21123456	Pendiente	2017-01-04	2017-02-04	xsfdfg
\.


--
-- Name: vacaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: grebo
--

SELECT pg_catalog.setval('vacaciones_id_seq', 5, true);


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
-- Name: permisos_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY permisos
    ADD CONSTRAINT permisos_pkey PRIMARY KEY (id);


--
-- Name: personal_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (cedula);


--
-- Name: usuario_login_key; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_login_key UNIQUE (login);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- Name: vacaciones_pkey; Type: CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY vacaciones
    ADD CONSTRAINT vacaciones_pkey PRIMARY KEY (id);


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
-- Name: usuario_cedula_personal_fkey; Type: FK CONSTRAINT; Schema: public; Owner: grebo
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_cedula_personal_fkey FOREIGN KEY (cedula_personal) REFERENCES personal(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: vacaciones_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: grebo
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

