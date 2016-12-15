--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: personal; Type: TABLE DATA; Schema: public; Owner: erimar
--

COPY personal (nombre, apellido, cedula, correo, cargo, estatus, fecha_n) FROM stdin;
wuilger	boada	16625133	kty_327@hotmail.es	Obrero	activo	1984-06-16
adelina	gonzalez	24511333	ade@hotmail.com	Docente	activo	1992-06-08
erimar	campos	22922867	eri@hotmail.com	Administrativo	activo	2007-06-13
\.


--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: erimar
--

COPY actividad (fecha, actividad, cedula) FROM stdin;
\.


--
-- Name: asistencia_ida_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('asistencia_ida_seq', 2, true);


--
-- Data for Name: asitencia; Type: TABLE DATA; Schema: public; Owner: erimar
--

COPY asitencia (fecha, cedula, hora, id) FROM stdin;
2015-08-28	16625133	10:00:23	1
2015-08-28	16625133	10:01	2
2015-08-28	16625133	10:03:24	3
2015-08-28	16625133	10:03:29	4
2009-08-05	16625133	12:06:46	5
2009-08-05	16625133	12:07:12	6
2009-08-05	16625133	12:13:14	7
2009-08-05	16625133	12:56:56	8
2009-08-05	16625133	12:57:25	9
2009-08-05	16625133	12:59:34	10
2009-08-05	16625133	01:01:57	13
2009-08-05	16625133	01:06:19	17
2009-08-05	16625133	01:42:59	18
2009-08-05	16625133	01:43:29	19
2015-02-28	16625133	09:11:58	20
2015-02-28	16625133	09:12:40	21
2015-03-01	16625133	07:28:56	23
2015-03-01	16625133	08:02:34	24
2015-03-03	16625133	08:53:49	26
2015-03-03	16625133	09:06:44	27
2015-03-03	22922867	09:17:33	28
2015-03-03	22922867	09:18:10	29
2015-03-03	22922867	09:19:50	30
2015-03-03	22922867	09:20:26	31
2015-03-03	22922867	09:20:52	32
2015-03-06	22922867	06:36:20	33
2015-03-08	22922867	08:21:58	34
2015-03-08	22922867	08:29:09	35
2015-03-17	22922867	02:31:51	36
\.


--
-- Name: asitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('asitencia_id_seq', 36, true);


--
-- Name: empleado_bonos_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('empleado_bonos_empleado_seq', 1, false);


--
-- Name: empleado_cedula_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('empleado_cedula_empleado_seq', 1, false);


--
-- Name: empleado_codigo_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('empleado_codigo_empleado_seq', 3, true);


--
-- Name: empleado_sueldo_empleado_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('empleado_sueldo_empleado_seq', 1, false);


--
-- Name: empleado_tipo_contrato_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('empleado_tipo_contrato_seq', 1, false);


--
-- Data for Name: inasitencia; Type: TABLE DATA; Schema: public; Owner: erimar
--

COPY inasitencia (fecha, hora, cedula, observacion, id) FROM stdin;
2015-02-28	09:20:16	16625133	Reposo Medico	3
2015-02-28	09:21:59	16625133	Observacion	4
2015-03-01	08:14:13	16625133	Reposo Medico	5
2015-03-01	08:56:02	16625133	Reposo Medico	6
2015-03-01	08:57:20	16625133	Retraso	7
2015-03-03	09:07:06	16625133	Retraso	9
2015-03-08	08:29:26	22922867	Inasistencia Injustificada	10
2015-03-08	08:29:39	22922867	Retraso	11
2015-03-08	08:29:54	22922867	Reposo Medico	12
2015-03-08	08:30:11	22922867	Observacion	13
2015-03-17	02:32:42	22922867	Retraso	14
2015-03-17	02:33:05	22922867	Inasistencia Injustificada	15
\.


--
-- Name: inasitencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('inasitencia_id_seq', 15, true);


--
-- Name: inventario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: erimar
--

SELECT pg_catalog.setval('inventario_id_seq', 2, true);


--
-- PostgreSQL database dump complete
--

