--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.4
-- Dumped by pg_dump version 9.1.4
-- Started on 2014-05-28 14:54:22

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 187 (class 3079 OID 11639)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1946 (class 0 OID 0)
-- Dependencies: 187
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 199 (class 1255 OID 18823)
-- Dependencies: 549 6
-- Name: nombre_instit(character varying, character varying, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION nombre_instit(tipo character varying, nro character varying, nombre character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
	DECLARE
		ret text := '';
	BEGIN
		IF tipo IS NOT NULL AND tipo <> ''THEN
			ret := ret || tipo;
			IF nro IS NOT NULL AND nro <> '' THEN
				ret := ret ||' N° '||nro;
			END IF;
		END IF;
		IF nombre IS NOT NULL AND nombre <> '' THEN
			ret := ret || ' "'|| nombre || '"';
		END IF;

		return ret;
	END;
$$;


ALTER FUNCTION public.nombre_instit(tipo character varying, nro character varying, nombre character varying) OWNER TO postgres;

--
-- TOC entry 161 (class 1259 OID 18824)
-- Dependencies: 6
-- Name: anios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE anios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.anios_id_seq OWNER TO postgres;

--
-- TOC entry 1947 (class 0 OID 0)
-- Dependencies: 161
-- Name: anios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('anios_id_seq', 120178, true);


--
-- TOC entry 162 (class 1259 OID 18826)
-- Dependencies: 6
-- Name: ciclos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ciclos_id_seq
    START WITH 2011
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ciclos_id_seq OWNER TO postgres;

--
-- TOC entry 1948 (class 0 OID 0)
-- Dependencies: 162
-- Name: ciclos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ciclos_id_seq', 2013, true);


--
-- TOC entry 163 (class 1259 OID 18828)
-- Dependencies: 6
-- Name: departamento_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE departamento_id_seq
    START WITH 508
    INCREMENT BY 1
    MINVALUE 508
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.departamento_id_seq OWNER TO postgres;

--
-- TOC entry 1949 (class 0 OID 0)
-- Dependencies: 163
-- Name: departamento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('departamento_id_seq', 571, true);


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 164 (class 1259 OID 18830)
-- Dependencies: 1909 6
-- Name: departamentos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE departamentos (
    id integer DEFAULT nextval('departamento_id_seq'::regclass) NOT NULL,
    jurisdiccion_id integer,
    name character varying(64)
);


ALTER TABLE public.departamentos OWNER TO postgres;

--
-- TOC entry 165 (class 1259 OID 18834)
-- Dependencies: 6
-- Name: dependencias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE dependencias_id_seq
    START WITH 10
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dependencias_id_seq OWNER TO postgres;

--
-- TOC entry 1950 (class 0 OID 0)
-- Dependencies: 165
-- Name: dependencias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('dependencias_id_seq', 10, false);


--
-- TOC entry 166 (class 1259 OID 18836)
-- Dependencies: 6
-- Name: etapas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE etapas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.etapas_id_seq OWNER TO postgres;

--
-- TOC entry 1951 (class 0 OID 0)
-- Dependencies: 166
-- Name: etapas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('etapas_id_seq', 104, true);


--
-- TOC entry 167 (class 1259 OID 18838)
-- Dependencies: 6
-- Name: gestiones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE gestiones_id_seq
    START WITH 4
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.gestiones_id_seq OWNER TO postgres;

--
-- TOC entry 1952 (class 0 OID 0)
-- Dependencies: 167
-- Name: gestiones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('gestiones_id_seq', 4, false);


--
-- TOC entry 186 (class 1259 OID 18908)
-- Dependencies: 6
-- Name: groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer NOT NULL,
    name character varying(20) NOT NULL
);


ALTER TABLE public.groups OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 18906)
-- Dependencies: 6 186
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groups_id_seq OWNER TO postgres;

--
-- TOC entry 1953 (class 0 OID 0)
-- Dependencies: 185
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE groups_id_seq OWNED BY groups.id;


--
-- TOC entry 1954 (class 0 OID 0)
-- Dependencies: 185
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('groups_id_seq', 1, false);


--
-- TOC entry 168 (class 1259 OID 18840)
-- Dependencies: 6
-- Name: instits_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE instits_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.instits_id_seq OWNER TO postgres;

--
-- TOC entry 1955 (class 0 OID 0)
-- Dependencies: 168
-- Name: instits_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('instits_id_seq', 5617, true);


--
-- TOC entry 169 (class 1259 OID 18842)
-- Dependencies: 1910 1911 1912 1913 1914 6
-- Name: instits; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE instits (
    id integer DEFAULT nextval('instits_id_seq'::regclass) NOT NULL,
    tipoinstit_id integer NOT NULL,
    cue integer DEFAULT 0 NOT NULL,
    anexo integer DEFAULT 0 NOT NULL,
    nombre character varying(150) NOT NULL,
    nroinstit character varying(20) NOT NULL,
    direccion character varying(100) NOT NULL,
    cp character varying(8) NOT NULL,
    activo integer DEFAULT 0 NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    localidad_id integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.instits OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 18850)
-- Dependencies: 6
-- Name: jurisdicciones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE jurisdicciones_id_seq
    START WITH 100
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jurisdicciones_id_seq OWNER TO postgres;

--
-- TOC entry 1956 (class 0 OID 0)
-- Dependencies: 170
-- Name: jurisdicciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('jurisdicciones_id_seq', 100, false);


--
-- TOC entry 171 (class 1259 OID 18852)
-- Dependencies: 1915 6
-- Name: jurisdicciones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE jurisdicciones (
    id integer DEFAULT nextval('jurisdicciones_id_seq'::regclass) NOT NULL,
    name character varying(40) NOT NULL,
    modified timestamp without time zone,
    created timestamp without time zone
);


ALTER TABLE public.jurisdicciones OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 18856)
-- Dependencies: 6
-- Name: localidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE localidades_id_seq
    START WITH 1300
    INCREMENT BY 1
    MINVALUE 1300
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.localidades_id_seq OWNER TO postgres;

--
-- TOC entry 1957 (class 0 OID 0)
-- Dependencies: 172
-- Name: localidades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('localidades_id_seq', 1650, true);


--
-- TOC entry 173 (class 1259 OID 18858)
-- Dependencies: 1916 6
-- Name: localidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE localidades (
    id integer DEFAULT nextval('localidades_id_seq'::regclass) NOT NULL,
    departamento_id integer,
    name character varying(64)
);


ALTER TABLE public.localidades OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 18862)
-- Dependencies: 6
-- Name: logs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE logs_id_seq
    START WITH 16368
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.logs_id_seq OWNER TO postgres;

--
-- TOC entry 1958 (class 0 OID 0)
-- Dependencies: 174
-- Name: logs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('logs_id_seq', 16368, false);


--
-- TOC entry 175 (class 1259 OID 18864)
-- Dependencies: 6
-- Name: ofertas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ofertas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ofertas_id_seq OWNER TO postgres;

--
-- TOC entry 1959 (class 0 OID 0)
-- Dependencies: 175
-- Name: ofertas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ofertas_id_seq', 8, true);


--
-- TOC entry 176 (class 1259 OID 18866)
-- Dependencies: 6
-- Name: planes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE planes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.planes_id_seq OWNER TO postgres;

--
-- TOC entry 1960 (class 0 OID 0)
-- Dependencies: 176
-- Name: planes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('planes_id_seq', 35281, true);


--
-- TOC entry 177 (class 1259 OID 18868)
-- Dependencies: 6
-- Name: queries_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE queries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.queries_id_seq OWNER TO postgres;

--
-- TOC entry 1961 (class 0 OID 0)
-- Dependencies: 177
-- Name: queries_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('queries_id_seq', 86, true);


--
-- TOC entry 178 (class 1259 OID 18870)
-- Dependencies: 6
-- Name: referentes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE referentes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.referentes_id_seq OWNER TO postgres;

--
-- TOC entry 1962 (class 0 OID 0)
-- Dependencies: 178
-- Name: referentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('referentes_id_seq', 1, false);


--
-- TOC entry 179 (class 1259 OID 18872)
-- Dependencies: 6
-- Name: sectores_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sectores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sectores_id_seq OWNER TO postgres;

--
-- TOC entry 1963 (class 0 OID 0)
-- Dependencies: 179
-- Name: sectores_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sectores_id_seq', 41, true);


--
-- TOC entry 180 (class 1259 OID 18874)
-- Dependencies: 6
-- Name: tipodocs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipodocs_id_seq
    START WITH 6
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipodocs_id_seq OWNER TO postgres;

--
-- TOC entry 1964 (class 0 OID 0)
-- Dependencies: 180
-- Name: tipodocs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipodocs_id_seq', 6, false);


--
-- TOC entry 181 (class 1259 OID 18876)
-- Dependencies: 6
-- Name: tipoinstits_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipoinstits_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipoinstits_id_seq OWNER TO postgres;

--
-- TOC entry 1965 (class 0 OID 0)
-- Dependencies: 181
-- Name: tipoinstits_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipoinstits_id_seq', 632, true);


--
-- TOC entry 182 (class 1259 OID 18878)
-- Dependencies: 1917 6
-- Name: tipoinstits; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipoinstits (
    id integer DEFAULT nextval('tipoinstits_id_seq'::regclass) NOT NULL,
    jurisdiccion_id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE public.tipoinstits OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 18882)
-- Dependencies: 6
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 1966 (class 0 OID 0)
-- Dependencies: 183
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 244, true);


--
-- TOC entry 184 (class 1259 OID 18884)
-- Dependencies: 1918 6
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer DEFAULT nextval('users_id_seq'::regclass) NOT NULL,
    username character varying(20) NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    group_id integer
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 1919 (class 2604 OID 18911)
-- Dependencies: 185 186 186
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY groups ALTER COLUMN id SET DEFAULT nextval('groups_id_seq'::regclass);


--
-- TOC entry 1934 (class 0 OID 18830)
-- Dependencies: 164
-- Data for Name: departamentos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY departamentos (id, jurisdiccion_id, name) FROM stdin;
344	54	Apóstoles
199	18	Bella Vista
545	18	Berón de Astrada
348	54	Cainguás
351	54	Candelaria
221	18	Capital
349	54	Capital
267	30	Colón
202	18	Concepción
363	54	Concepción
261	30	Concordia
223	18	Curuzú Cuatiá
259	30	Diamante
360	54	Eldorado
212	18	Empedrado
222	18	Esquina
269	30	Federación
270	30	Federal
208	18	General Alvear
357	54	General Manuel Belgrano
215	18	General Paz
204	18	Goya
266	30	Gualeguay
255	30	Gualeguaychú
362	54	Guaraní
345	54	Iguazú
254	30	Islas del Ibicuy
213	18	Itatí
198	18	Ituzaingó
262	30	La Paz
220	18	Lavalle
353	54	Leandro N. Alem
347	54	Libertador General San Martín
216	18	Mburucuyá
205	18	Mercedes
359	54	Montecarlo
206	18	Monte Caseros
265	30	Nogoyá
355	54	Oberá
268	30	Paraná
210	18	Paso de los Libres
200	18	Saladas
203	18	San Cosme
356	54	San Ignacio
350	54	San Javier
256	30	San José de Feliciano
209	18	San Luis del Palmar
217	18	San Martín
207	18	San Miguel
354	54	San Pedro
201	18	San Roque
260	30	San Salvador
214	18	Santo Tomé
218	18	Sauce
263	30	Tala
258	30	Uruguay
361	54	Veinticinco de Mayo
264	30	Victoria
257	30	Villaguay
\.


--
-- TOC entry 1940 (class 0 OID 18908)
-- Dependencies: 186
-- Data for Name: groups; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY groups (id, name) FROM stdin;
1	Invitado
2	Editor
3	Administrador
\.


--
-- TOC entry 1935 (class 0 OID 18842)
-- Dependencies: 169
-- Data for Name: instits; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY instits (id, tipoinstit_id, cue, anexo, nombre, nroinstit, direccion, cp, activo, created, modified, localidad_id) FROM stdin;
5342	158	3002046	0	Hans Christian Andersen	114	Urquiza N° 351	3109	1	2011-10-19 08:59:52	2012-03-01 08:28:03	614
5394	110	1801734	0		10	3 de Abril N° 57	3400	1	2012-02-29 09:54:07	2012-07-20 15:24:16	491
5335	158	3000493	0	Pedro Goyena	41	Urquiza N° 275	3105	1	2011-10-19 07:30:01	2012-03-01 08:17:51	582
5336	158	3000712	0	Nivel Primario para Adultos Carlos María Onetti	144	Av. de las Américas N° 1700	3100	0	2011-10-19 07:46:00	2011-10-19 07:50:27	612
5344	160	3003112	16		389	Las Azaleas N° 2001	3206	1	2011-10-19 09:35:37	2012-03-01 08:36:31	587
5337	158	3001038	0		26	Monte Caseros N° 315	3100	1	2011-10-19 08:15:45	2012-03-01 08:20:30	612
5339	158	3001557	0	William C. Morris	14	Carlos Mastronardi SN°	3100	1	2011-10-19 08:26:27	2012-03-01 08:23:27	612
5341	158	3001955	0	Amado Bonpland	156	Av. Jorge Newbery N° 1404	1958	1	2011-10-19 08:50:38	2012-03-01 08:27:39	612
5343	160	3003112	15		361	San Martín N° 750	3185	1	2011-10-19 09:28:25	2012-03-01 08:36:26	1604
1972	99	1801629	0		10	Av. 3 de Abril Nº 57	W3400AIA	0	\N	2012-12-10 13:09:58	491
5345	160	3003112	18		256	Belgrano SN°	3206	1	2011-10-19 10:01:20	2012-03-01 08:36:42	1606
5348	160	3003112	21		259	Av. Corrientes N° 675	3185	1	2011-10-19 11:43:11	2012-03-01 08:36:48	1604
5349	160	3003119	7		137	Eva Perón y Guemes	3177	1	2011-10-19 12:12:34	2012-03-01 08:38:09	622
5329	158	3001826	0	Alberto Gerchunoff	157	Av. Don Bosco N° 987	1960	1	2011-10-05 11:57:53	2012-03-01 08:27:21	612
5328	158	3001916	0	Ramón Segundo Otero	141	Av. Ramírez N° 2249	3100	1	2011-10-05 10:20:38	2012-03-01 08:27:34	612
5351	160	3003119	8		138	Libertad SN°	3174	1	2011-10-19 12:54:49	2012-03-01 08:38:17	623
5353	160	3003119	10		140	Roque Sáenz Peña N° 366	3174	1	2011-10-20 07:08:16	2012-03-01 08:38:32	623
5354	160	3003119	11		141	España SN°	3174	1	2011-10-20 07:17:42	2012-03-01 08:38:41	623
1867	113	1800140	0	Juana Manso	01	Av. Teniente Ibáñez Nº 1951	W3410ABE	1	\N	2012-07-25 15:31:43	491
5362	158	3000782	0	Enrique Mosconi	149	Urquiza N° 334	3134	1	2011-10-27 12:32:12	2012-12-05 12:03:59	608
5365	158	3001777	0	Leopoldo Herrera	142	Laurencena y Ramirez	1951	1	2011-10-28 14:26:03	2012-03-01 08:23:41	612
2147	158	3000938	0	Esteban Echeverría	45	Gualeguaychú 380	3177	1	\N	2012-03-01 08:20:17	622
5201	166	3003068	0	De Educación Permanente	30	Perú y Bartolini	2009	1	2011-03-23 15:15:29	2012-03-02 08:21:09	628
1942	109	1801414	0	Mercedes		José María Gómez y Yatay s/nº	W3470CTF	1	\N	2012-08-31 20:01:41	1464
2300	163	3002260	0	Centro Educativo (D.E.J.A)	429	Remedios Escalada de San Martín N° 84	2840	1	\N	2012-03-02 09:25:05	592
1882	113	1800558	0	Ingeniero Juan José Gómez Araujo	01	Fernando Irastorza Nº 627	W3460	1	\N	2012-07-05 12:04:51	493
1891	113	1800697	0	Valentín Virasoro		Ejército Argentino Nº 285	W3450BZE	1	\N	2012-07-26 14:40:07	501
2343	167	3002315	0		3	Av. Paysandú y Víctor Etcheverry Snº	3260	1	\N	2012-03-02 11:44:54	625
4853	110	1801644	0	Escuela Carmen Molina del Llano		La Rioja N° 687	W3400BZE	1	2009-08-24 16:13:28	2012-12-10 13:18:57	491
5251	158	3001546	0	Don Segundo Sombra	87	25 de mayo N° 1720	2820	1	2011-05-24 11:08:00	2012-03-01 08:23:20	593
2257	163	3002138	0		327	Osvaldo Magnasco	3177	1	\N	2012-03-09 07:37:23	622
2216	167	3001696	0	Pbro. José María Colombo	02	9 de Julio Nº 195	2820	1	\N	2012-11-19 11:11:03	593
2212	166	3001670	0	De Educación Permanente - La Floresta	4	Republica del Libano Nº 2723	3100	1	\N	2012-05-07 12:15:05	612
2570	164	3002871	0	María Grande		Av. Argentina N° 1162	3133	1	\N	2012-12-05 11:57:50	611
2139	167	3000497	0	Enrique Carbó	3	Buenos Aires y Laprida Snº	3100	1	\N	2013-01-21 14:39:03	612
5290	158	3001016	0	Supremo Entrerriano	155	Av. Ramirez y Juan Báez	3100	1	2011-07-19 12:01:50	2012-03-01 08:20:23	612
1877	112	1800411	0	De Servicio Social Remedios Escalada de San Martín		Hipólito Irigoyen Nº 2145	3400	0	\N	2011-09-16 10:25:37	491
2141	158	3000539	0	Patricias Argentinas	73	San Miguel y Gral Paz	3142	1	\N	2012-03-01 08:18:01	598
2199	158	3001528	0	General Francisco Ramirez	02	Roque Saenz Peña 366	3174	1	\N	2012-03-01 08:23:07	623
2552	592	3002819	0			Ritou N° 501 (Y Sarmiento)	2843	1	\N	2012-05-22 09:26:55	591
2200	166	3001534	0	Centro Educativo Comunitario - Dr. Manuel Belgrano	10	Pedro García y El Ceibo	3190	1	\N	2013-02-18 15:19:41	600
2295	160	3002255	0		176	Ritou N° 735	2000	0	\N	2011-09-16 10:25:38	591
2303	160	3002263	0		183	Ritou N° 735	2843	0	\N	2011-09-16 10:25:38	591
2236	155	3001899	0	Florencio Molina Campos	2	Artusi Snº	3180	1	\N	2012-05-28 07:52:05	590
5400	300	5401770	0		9	Paraje Progreso	3363	1	2012-05-28 10:32:01	2013-06-11 15:56:29	1396
5403	284	5401764	0		33	Andrés Guacurari y Brasil	3374	1	2012-06-05 12:08:45	2012-08-31 19:49:45	1558
3244	292	5400667	0	De Policía General Manuel Belgrano		Puerto Argentino y Golfo San Carlos Snº (Villa Lanús)	3300	0	\N	2012-01-17 12:00:19	842
5408	111	1801737	0	San Isidro Labrador		4ta. sección Paraje San Isidro	W3450	1	2012-06-11 08:57:14	2012-09-14 20:15:10	501
5409	111	1801448	0	3 de Abril		Municipio 3 de abril	3432	1	2012-06-11 09:54:17	2012-09-13 23:38:21	1621
4943	158	3000104	0	Leopoldo Herrera	29	Caseros y Moreno	3150	1	2009-11-19 14:09:11	2012-03-01 08:17:43	605
4977	163	3002992	0		199	Pancho Ramirez Sn°/ Hacket N° 87	2840	1	2010-01-08 12:45:40	2012-03-01 08:28:31	592
5128	158	3001671	0	Manuel Pacífico Antequera	143	Casiano Calderón N° 2172	3100	1	2010-11-16 11:21:04	2012-03-01 08:23:35	612
3228	295	5400616	0	Ismael Quiles	13	María Eva Duarte y Juan B. Justo Snº	3356	1	\N	2012-03-01 09:13:53	1345
3226	276	5400597	0		11	Av. San Martín y Primeros Colonizadores Snº	3379	1	\N	2012-03-01 09:13:38	1308
3215	295	5400549	0	Domingo Faustino Sarmiento	01	Catamarca N° 170	3315	1	\N	2012-03-01 09:10:46	1346
3227	291	5400599	0		40	Santa Fé S/N°	3363	1	\N	2012-03-01 09:13:45	875
3240	276	5400641	0	Bicentenario del Natalicio del Libertador General Don José F. de San Martín	10	San Martín Sn°	3316	1	\N	2012-03-01 09:14:41	1435
3245	295	5400669	0		11	Suiza Nº 2570	3380	1	\N	2012-03-01 09:18:13	846
3239	295	5400640	0	José Manuel Estrada	03	Av. José Manuel Estrada N° 120	3334	1	\N	2012-03-01 09:14:34	864
3246	291	5400677	0		38	25 de Mayo y Aparicio Victor Calvo	3338	1	\N	2012-03-01 09:18:21	851
3254	291	5400741	0		01	Avenida Rademacher N° 2598	3300	1	\N	2012-03-01 09:18:39	842
3263	295	5400836	0	Fray Mamerto Esquiú	05	Independencia N° 612	3322	1	\N	2012-03-01 09:19:22	872
3273	276	5400918	0		17	Acceso Barrio Las Rosas - Ex Ruta Nacional Nº 14 Snº	3352	1	\N	2012-03-01 09:20:44	1436
3278	295	5400991	0	General Manuel Belgrano	02	Horacio Quiroga Nº 1665	3384	1	\N	2012-03-01 09:21:14	867
3318	293	5401295	0		06	Barrio a 3-1 Nueva Virgen de Fátima	3304	1	\N	2012-03-01 09:24:35	841
3264	295	5400868	0	Mariano Moreno		Av. 9 de Julio N° 245	3350	1	\N	2012-08-15 14:59:11	832
3206	276	5400236	0		19	San Luis Nº 297	3380	1	\N	2012-11-23 12:57:16	846
5363	160	3003152	0	Villa del Rosario	1	Don Bosco N° 278	3229	1	2011-10-27 15:04:05	2012-12-06 12:53:02	1606
2293	163	3002253	0		175	San Lorenzo N° 465	2840	1	\N	2012-05-16 12:47:57	592
4959	291	5400642	0	Juan Martín de Pueyrredón	5	Anastacio Cabrera Sn°	3308	1	2009-12-04 07:46:11	2012-03-01 09:14:50	1550
5047	291	5400558	0	Campaña del Desierto	22	Calle Arturo Jauretche Sn°	3374	1	2010-06-07 15:16:36	2012-05-07 08:03:37	1558
5127	158	3000773	0	La Cautiva	97	Sarmiento N° 1471	3116	1	2010-11-15 16:12:57	2012-05-24 10:03:11	1563
5380	292	5401537	0	Académico Dr. Branemark	473	Bolivia N° 2307	3300	1	2011-12-01 09:56:28	2011-12-01 09:56:28	842
5389	292	5400423	0	Intercultural Bilingüe Bi- Cultural "Tajy Poty"	1407	Ruta Provincial N° 6 Manzana 15	3324	1	2011-12-20 11:43:54	2012-03-01 08:40:48	1612
2231	166	3001820	0		15	Azcuénaga N° 152	3100	1	\N	2012-12-06 13:14:20	612
5376	273	5401729	0		15	Juan D. Perón y Monteagudo	3356	1	2011-11-30 09:21:29	2011-11-30 09:21:29	1345
2124	167	3000032	0	Fray Luis Beltrán	57	Pio XII N° 157	3206	1	\N	2012-12-05 13:29:26	587
5377	273	5401648	0		9	Calle N° 133 y Av. N° 176	3300	1	2011-11-30 09:41:16	2012-08-16 15:51:17	842
2344	155	3002316	0	Mariano Echaguibel	144	Arturo Salas Nº 23- Planta Baja	2846	1	\N	2011-10-03 09:20:01	596
5379	292	5401288	0	Lisandro De La Torre	459	Rivadavia N° 1869 EX 333	3300	1	2011-12-01 09:27:40	2012-06-18 12:36:01	842
2214	167	3001690	0	Profesor Facundo Arce	68	Santa Rosa Nº 777	3117	1	\N	2011-11-11 15:07:44	613
2178	155	3001328	0	Capitán Gral. Justo José de Urquiza		Ejido de Colon Snº- Casilla de Correo 18	3281	1	\N	2012-09-04 19:56:41	1457
2472	156	3002484	0		62	San Martin y Moreno Snº	3162	1	\N	2012-12-05 11:44:53	606
5383	292	5401379	0	Crisol Universal	301	Av. Roque Gonzalez S/N° Mz 249	3308	1	2011-12-05 08:57:48	2013-01-14 14:38:55	1550
2190	167	3001478	0	José Benjamin Zubiaur	79	Saenz Peña N° 851	3170	1	\N	2012-09-05 23:36:07	624
2451	516	3002452	0	Tuparai	132	Avenida 9 de Julio N° 1745	3228	1	\N	2012-01-13 07:45:21	586
2239	167	3001922	0	General Enrique Mosconi	34	Sarmiento Nº 380	3133	1	\N	2013-02-18 14:45:31	611
1896	113	1800820	0	Bernardino Rivadavia	02	Av. Teniente Ibáñez Nº 1897	W3410ABD	1	\N	2011-09-16 10:25:37	491
1875	110	1800350	0	Rector Vicente Fidel López		Av. Patagonia S/Nº	3340	1	\N	2012-01-16 11:56:01	1137
2142	516	3000659	0	Francisco Ramos Mejía	17	Marshall N° 222	3103	1	\N	2012-01-12 12:39:44	585
2326	156	3002291	0	Pbro. José Joannás	97	Pbro. Francisco Kaul N° 291	2826	1	\N	2012-01-27 08:01:59	595
3317	270	5401291	0	Argentino		Av. Mitre N° 2070	3300	1	\N	2011-09-16 10:25:40	842
3248	284	5400708	0	Polonia	03	Ernesto Barbaro N°149	3360	1	\N	2013-06-27 11:23:11	869
3250	268	5490001	0	Eldorado		Bertoni N° 152	3380	1	\N	2011-09-16 10:25:40	846
2208	167	3001612	0	Conscripto Humberto Omar Giorgi	96	Pasaje Houssay Snº	2846	1	\N	2012-12-05 12:21:26	596
5199	166	3003058	0	Centro Comunitario de Educación Permanente	27	Avellaneda SN°	3164	1	2011-03-17 11:02:46	2012-05-16 12:41:13	583
2277	163	3002234	0		431	Gualeguay y San Martín S/N	3177	1	\N	2012-05-16 12:47:44	622
5316	300	5401711	0		7	Sección N° 9 Mz N° 128 Km N° 8	3304	1	2011-09-07 09:50:53	2013-06-11 15:11:19	841
2292	160	3002252	0		172	Bartolomé Mitre 150 (Y Maipú)	2840	1	\N	2011-09-16 10:25:38	592
5228	543	1801515	0	Riachuelo	16	San Francisco de Asís N° 100	3401	1	2011-04-27 15:06:37	2012-08-03 15:47:56	491
5239	270	5400540	0	Verbo Divino	424	Av. Tambor de Tacuarí y Padre Adolfo Kolping	3300	1	2011-05-10 15:41:59	2012-10-02 20:14:16	842
5250	160	3003119	0		134	Leguizamón y Libertad	3174	0	2011-05-23 15:41:06	2011-09-16 10:25:44	623
5259	550	5401547	0	Adolfo Kolping	1115	Av. Beato Roque González y Virgen de Fátima	3334	1	2011-06-10 15:14:37	2012-01-17 08:20:25	1585
5255	292	5401440	0	Sagrado Corazón de Jesús	921	25 de Mayo esquina San Martín SN°	3378	1	2011-06-07 12:51:12	2012-07-04 14:42:54	853
5275	109	1801218	1	Colonia Liebig		Sarmiento y 12 de Octubre	3358	1	2011-07-04 12:35:48	2012-08-13 11:12:42	504
5277	113	1801423	1	UORA "Islas Malvinas" - Anexo		Neuquén N° 1470	W3410BVP	0	2011-07-04 14:27:16	2012-12-10 13:12:22	491
5287	284	5401699	0		31	Ruta Nacional N° 14 KM 1355	3352	1	2011-07-13 14:57:17	2011-09-16 10:25:44	1436
5309	270	5401533	0	Misionero de Estudios Superiores	472	Av. Santa Catalina N° 1778, piso 4°	3300	1	2011-08-25 10:22:46	2012-01-16 11:54:48	842
5314	298	5400311	0	Carlos Culmey	1205	Av. Libertador N° 3066	N3384AMR	1	2011-09-02 10:47:58	2012-07-02 12:45:21	867
5295	111	1801693	0	Arerunguá		Ruta Provincial N° 13 Km 37,5	3480	1	2011-07-26 15:44:17	2012-08-01 15:22:22	1520
5297	109	1801415	1	Profesor Agustín  - Subsede Yapeyú		Obispo Romero S/N°	3231	0	2011-07-28 12:57:10	2012-12-10 13:12:37	1596
5273	166	3003134	0	Anacleto Medina	16	Luis Palma y Los Jacarandaes	3100	1	2011-06-27 15:57:00	2012-05-16 12:41:27	612
5288	272	5401630	0	Monseñor Jorge Kemerer	1660	Dep. 3 Municipio 14, secc 2 chacra y manzana000 Parcela 87	3308	1	2011-07-18 10:53:53	2012-06-05 10:20:30	1550
5310	270	5401538	0	Conocimientos Estéticos Carola B	1314	Neuquén N° 361	3360	1	2011-08-25 11:10:34	2012-07-11 11:38:32	869
5285	284	5401668	0		29	Km 28 Edificio de la ex Municipalidad de 9 de Julio	3380	1	2011-07-13 14:43:56	2012-03-22 09:20:11	845
5296	110	1801695	0	Itá Ibaté		9 de Julio y Urquiza	W3480	1	2011-07-27 15:19:13	2012-12-10 13:15:52	1520
1907	111	1801108	0	José María Malfussi		Paraje Arroyo Méndez S/Nº	3344	1	\N	2012-07-27 16:04:25	498
1868	113	1800142	0	Dr. Juan Ramón Vidal		Bartolomé Mitre Nº 1652	W3196ALL	1	\N	2011-09-16 10:25:37	497
1866	105	1800134	0	Normal Secundaria Profesor Ramón M. Gómez y Anexo Taller Rosario Lencinas de Bustinduy		Avda. Gral. San Martín y Dr. Julio César Rivero	W3412ABA	1	\N	2012-09-14 20:40:17	515
1876	113	1800403	0	General Joaquín Madariaga	01	Madariaga Nº 1545	W3230AFB	1	\N	2011-09-16 10:25:37	513
1888	113	1800688	0	Nuevo Milenio		Mocito Acuña 750 y Lisandro de la Torre	W3342BIP	1	\N	2011-09-16 10:25:37	524
1890	108	1800696	0	Magdalena Güemes de Tejada		Av. Maradiaga N° 418	W3450BXL	1	\N	2011-09-16 10:25:37	501
1878	113	1800417	0	Brigadier General Pedro Ferré		Vélez Sarsfield y Coronel Pringles s/nº	3400	1	\N	2012-06-29 20:17:48	491
1889	105	1866666	0			222	222	0	\N	2013-03-18 11:50:14	501
1872	111	1800303	0	de Ramada Paso		Ruta Nacional N° 12 Km. 1083	3414 SAG	1	\N	2012-12-10 13:14:37	503
1873	544	1800310	0	Francisco David Traversaro		Belgrano y 25 de Mayo	3445	1	\N	2012-07-25 15:51:15	1544
1885	113	1800671	0	Arquitecto Francisco Pinaroli		Dr. Luis Agote Nº 455	W3450AVI	1	\N	2012-07-26 11:42:13	501
1886	111	1800674	0	Manuel Belgrano		Av. San Martín y Ruta Nº 27	W3432CNN	1	\N	2012-07-26 14:23:10	1272
1880	111	1800435	0	República de Venezuela		Ruta 129 Km 5 s/nº	W3220CGZ	1	\N	2012-07-05 11:59:54	512
1894	113	1800758	0	Ingeniero Roque Guillermo Carranza		Av. Ing. Roque G. Carranza S/Nº entre 25 de Mayo y entre Ríos	W3402ABC	1	\N	2012-07-26 15:13:37	1463
1901	113	1800984	0	Amalia del Valle Herrera de Aguirre"	02	Brasil N° 830	W3230FLP	1	\N	2012-07-27 13:04:03	513
1887	112	1800675	0	Curuzú Cuatiá		General Ramírez Nº 785 y Caaguazú	3460	1	\N	2012-08-31 19:56:42	493
1879	113	1800431	0	Pedro Ferré	01	Juan Pujol Nº 1284	W3220CGZ	1	\N	2012-09-14 19:42:30	512
1883	113	1800653	0		01	Av. Patagonia Nº 150	W3340CKD	1	\N	2012-11-02 13:11:37	1137
1902	549	1800985	0	Fernando Erro		Calle 980 (FP) y Pasaje A. Meyer y Av. Libertador - Pasaje A. Meyer S/Nº	3220	1	\N	2012-01-16 12:09:33	512
1933	113	1801404	0	Fray Luis Beltrán (Ex Centro Profesional Nº 01)		Av. Independencia Nº 5751	3400	1	\N	2011-09-16 10:25:37	491
1939	108	1801410	0	Damas Patricias Argentinas		Manuel Florencio Mantilla Nº 1014	W3470CXT	1	\N	2011-09-16 10:25:37	1464
1934	108	1801405	0	Nuestra Señora de la Misericordia		9 de Julio Nº 796	W3400AIL	1	\N	2012-03-05 09:21:34	491
1919	109	1801218	0	Localidad Virasoro		Lunita del Taragüí y Av. Tránsito Cocomarola	W3342COS	1	\N	2012-07-03 11:06:43	524
1895	113	1800801	0	Dr. Juan G. Pujol		Esteban Martinez y Stgo. Juan B. Cabral	W3420AYB	1	\N	2013-01-21 13:45:50	514
1924	108	1801290	0	Caa Cati		Coronel Esquivel s/nº	3407	1	\N	2012-09-06 23:27:44	499
1945	109	1801419	0	Localidad Bella Vista		Entre Rios N° 898	W3432BDJ	1	\N	2012-07-03 11:19:35	1272
1912	113	1801157	0	Dr. Juan Esteban Martinez	01	Santa Fe N° 952	W3432CPR	1	\N	2012-07-26 10:52:01	1272
1937	113	1801408	0	Nuestra Señora de Itatí		25 de Mayo Nº 1010	W3403AAS	1	\N	2012-07-30 15:57:06	517
1903	111	1800997	0	Eulogio Cruz Cabral		Av. Libertador General San Martín Km 3 S/Nº	W3470ELB	1	\N	2012-07-27 16:00:25	1464
1914	112	1801176	0	Carmen Molina de Llano		La Rioja Nº 687	W3400BZE	0	\N	2013-03-01 14:24:25	491
1932	544	1801120	1	Centro de Formación Profesional Loreto	12	Tomás Úbeda Nº 540	W3483ATA	1	\N	2012-08-07 12:43:15	1232
1904	109	1801415	0	Profesor Agustín Gómez		Madariaga Nº 1350	W3230AEZ	1	\N	2012-08-31 20:26:23	513
1938	110	1801409	0		22	J. A. Ferreyra Nº 1096 y Virasoro	W3470CSV	1	\N	2012-09-03 23:58:57	1464
1940	109	1801412	0	José Manuel Estrada		San Martín Nº 850	3400	0	\N	2012-10-22 14:22:15	491
1910	109	1801145	0	Josefina Contte		Pellegrini Nº 702	3400	0	\N	2012-12-10 13:19:43	491
1941	109	1801413	0	Dr. J. Alfredo Ferreyra		Bartolomé Mitre Nº 956	W3196AKX	0	\N	2012-12-10 13:21:11	497
1971	113	1801573	0			2 de Abril Nº 673	W3226AAG	1	\N	2011-09-16 10:25:37	511
1974	110	1801655	0	La Cruz		Zelmira de Luca de Soto y Esquina Uruguay	W3346BPL	1	\N	2011-09-16 10:25:37	518
1951	113	1801429	0			Av. Rivadavia S/Nº entre Guemes y Almirant Brown	3358	1	\N	2012-03-02 11:43:11	504
1975	105	1890001	0	Regional de Agricultura, Ganadería e Industria Afines		Ruta 12 Km. 1031 y Av. Centenario s/nº	3400	1	\N	2012-05-14 07:40:15	491
1957	109	1801467	0	María Luisa Román de Frechou		Alvear Nº 1491	W3420ADS	1	\N	2012-07-03 11:23:54	514
1965	109	1801553	0	General Martín Miguel de Güemes		San Martín Nº 623	3403	1	\N	2012-07-03 11:24:31	517
1959	108	1801471	0	Remedios de Escalada de San Martín		Benjamín Virasoro Nº 438	W3448BCH	1	\N	2012-08-01 12:14:09	795
1964	113	1801551	0	Construcciones Portuarias y Vías Navegables		Av. Juan de Vera Nº 1387	W3400BJC	1	\N	2012-08-01 12:31:21	491
1953	109	1801451	0	Julio Cortázar		Cambaceres s/n° y Bartolomé Mitre	W3418AGZ	1	\N	2013-03-26 10:04:25	494
1958	110	1801470	0		06	Plácido Martínez Nº 835	3440	1	\N	2012-09-05 21:40:37	1465
1961	110	1801479	0	Paso de la Patria		Belgrano y Santiago del Estero 	3403	1	\N	2012-09-06 20:52:47	502
2136	167	3000314	0	Félix Bourren Meyer	45	Teniente Gutiérrez 456	3218	1	\N	2012-09-07 20:13:39	620
2230	167	3001809	0	Dr. Federico Hoening	58	Av. entre Ríos Nº 248	3127	1	\N	2011-09-16 10:25:38	609
2126	155	3000076	0	Antonio Galli	37	Ruta Nacional N° 127 y Ruta Provincial N° 2	3183	1	\N	2012-12-05 13:09:33	588
2128	155	3000102	0	La Carola	814	Ejido Norte	3150	1	\N	2012-12-05 14:45:54	605
2130	166	3000209	0	de Educación Permanente y Formación Profesional Pancho Ramirez	5	9 de Julio N° 212	1986	1	\N	2012-05-16 12:38:38	625
2275	163	3002232	0		430	Colón y Cepeda	3174	1	\N	2012-05-16 12:47:33	623
2158	167	3001112	0	Pablo Stampa	01	Salta y Estrada Nº 1790	3228	1	\N	2011-09-16 10:25:38	586
2161	155	3001143	0	Justo José de Urquiza	02	Empalme Neid - Ruta Pcial Nº 130 Snº	3240	1	\N	2011-09-16 10:25:38	630
2154	155	3001089	0	Juan B. Ambrosetti	9	1er. Distrito-- Ruta Nacional 12- Km 235	2840	1	\N	2012-01-18 07:37:07	592
2145	155	3000840	0	Alas Argentinas	73	Ruta Nacional Nº 18 Km. 89	3111	1	\N	2012-09-03 23:14:54	610
2134	154	3000293	0	Cruz Roja Argentina -Filial Paraná	D- 74	Andrés Pazos Nº 301	E3100FHG	1	\N	2012-08-15 12:23:41	612
2169	155	3001207	0	José Campodónico	36	Concordia Nº 2350	3228	1	\N	2012-09-03 23:20:27	586
2160	167	3001127	0	Dr. C. M. Etchebarne	1	Posadas Nº 60	3240	1	\N	2012-09-03 23:23:45	629
2144	155	3000766	0	Crucero A.R.A. General Belgrano	49	Ruta Provincial N° 35- Zona Rural	3164	1	\N	2012-12-05 12:00:49	604
2131	164	3000248	0	Localidad Concordia		Bartolome Mitre N° 390	3200	1	\N	2012-12-05 13:18:13	579
2168	167	3001201	0		114	Pasaje Eloy Elsesser Snº -complejo Educativo	3164	1	\N	2012-12-06 11:37:27	583
2146	155	3000929	0	Gobernador Macía	51	Ruta Provincial 30 Km 2	3177	1	\N	2012-12-06 15:23:00	622
2138	166	3000474	0	de Educación y Formación Profesional San Vicente	2	Hernandez N° 287	3260	1	\N	2012-05-16 12:38:54	625
2140	166	3000508	0	Nuestra Señora de Pompeya	7	Urdinarrain 752 y Federación	3200	1	\N	2012-05-16 12:39:07	579
2152	166	3001083	0	Marta Ávalos	8	Cabo 1º González y Eva Perón - Barrio La Bianca	3200	1	\N	2012-05-16 12:39:36	579
2164	166	3001173	0	Nuestra Señora de Fátima	6	Avenida Castro Nº 430	3200	1	\N	2012-05-16 12:39:48	579
2177	167	3001313	0	Canónigo Narciso Goiburu	02	Alberdi Nº 467 Planta Alta	3280	1	\N	2011-09-16 10:25:38	1457
2166	167	3001188	0	Independencia	02	Alberdi Nº 223 (E/ San Juan y La Rioja)	3200	1	\N	2011-11-11 13:00:00	579
2176	167	3001312	0	Dr. Herminio Juan Quirós	01	Alberdi Nº 467 Pb	3280	1	\N	2011-12-02 09:37:28	1457
2192	167	3001482	0	General Francisco Ramírez	01	Martín Zapata Nº 1053	3100	1	\N	2011-09-16 10:25:38	612
2195	167	3001498	0		01	Buenos Aires N° 618	3105	1	\N	2011-09-16 10:25:38	582
2183	164	3001363	0	Loc. Urdinarrain		Boulevard Hipólito Yrigoyen N° 240	2826	1	\N	2012-07-11 11:41:35	595
2198	167	3001508	0	Ana Urquiza de Victorica	01	Gral. Justo José de Urquiza Nº 139	3260	1	\N	2012-09-10 21:13:59	625
2155	167	3001099	0	Brigadier Gral. Pascual Echague	01	Entre Rios Nº 1064	3200	1	\N	2012-12-06 12:12:05	579
2149	166	3000993	0	San Benito	11	San Martín y Libertad	3107	1	\N	2012-09-20 23:14:35	1470
2133	167	3000282	0	General Manuel Savio	18	Pbro. F. Kaúl y 3 de Febrero Snº	2826	1	\N	2012-11-02 13:13:36	595
2170	167	3001219	0	Augusto Widmann	01	Av. entre Rios Nº 214	2823	1	\N	2012-12-06 14:48:30	597
2157	167	3001111	0	Dr. Luis R. Mac´kay	01	Intendente Quadri Nº 49	E2840EFA	1	\N	2012-12-05 13:56:44	592
2173	167	3001275	0	Francisco Ramírez	02	Ambrosio Artusi Nº 1072	3260	1	\N	2012-12-06 12:56:10	625
2191	167	3001481	0	Almirante Guillermo Brown	02	Rondeau N° 647	3100	1	\N	2013-01-21 14:38:10	612
2185	155	3001382	0	José Hernández	50	Colonia El Carmen	3267	1	\N	2012-12-06 14:44:25	576
2188	155	3001467	0	Manuel P. Antequeda	15	Colonia San Carlos - Cc 8- Zona Rural	3142	1	\N	2012-12-06 15:02:39	599
2202	167	3001543	0	Alférez de Navío José María Sobral	1	San Martin Nº 1067	2822	1	\N	2013-01-21 14:37:22	593
2205	167	3001572	0	Malvinas Argentinas	05	Toscanini y Soler Snº	3100	1	\N	2011-09-16 10:25:38	612
2206	167	3001600	0	Dr. Luis Federico Leloir	44	Av. San Martín Nº 345	3142	1	\N	2011-09-16 10:25:38	598
2210	167	3001626	0	Fernando Torres Vilches	D-67	25 de Mayo N° 280	3192	1	\N	2011-09-16 10:25:38	602
2218	167	3001735	0	Osvaldo Magnasco	01	25 de Mayo y Pellegrini Snº	3174	1	\N	2011-09-16 10:25:38	623
2220	168	3001739	0		715	Echagüe y Berutti Sn°	3190	0	\N	2011-09-16 10:25:38	600
2226	167	3001778	0	Puerto Nuevo	100	Santiago de Liniers Nº 395	3100	1	\N	2011-09-16 10:25:38	612
2263	165	3002200	0	Juan Pablo I	122	Tratado del Pilar y Eva Peron	3192	1	\N	2011-09-16 10:25:38	602
2264	165	3002201	0	María Goretti	21	Saavedra N° 976	3100	1	\N	2011-09-16 10:25:38	612
2213	167	3001678	0		139	Av. San Martín N° 1598	3109	1	\N	2012-03-15 13:03:55	614
2174	168	3001297	0	Localidad San José de Feliciano		Rivadavia Sn°	3187	1	\N	2012-07-02 13:34:27	617
2235	167	3001898	0	Caudillos Federales	23	Rivadavia N° 745 (Y 25 de Mayo Snº)	3180	1	\N	2012-09-04 20:20:02	590
2221	167	3001740	0	España	01	Av. Artigas Snº	3190	1	\N	2012-09-04 20:25:13	600
2224	167	3001773	0	Teniente Luis Cenobio Candelaria	03	Av. Jorge Newbery N° 4200	3100	1	\N	2012-09-05 21:47:07	612
2186	154	3001395	0	en Administracion de Empresas	795	Urquiza N° 150	3218	1	\N	2012-09-04 21:19:35	620
2217	155	3001724	0		39	Acceso a Villa Urquiza Snº	3113	1	\N	2012-09-05 20:05:02	616
2233	155	3001850	0	Martín Fierro	83	Ruta Provincial 33 KM 26	3109	1	\N	2012-12-06 15:27:17	603
2237	167	3001913	0	Libertador General José de San Martín	21	Brasil N° 1050	3100	1	\N	2012-12-06 15:29:42	612
2244	155	3001979	0	Manuel Bernard	52	Distrito Manantiales	3187	1	\N	2013-02-18 14:50:47	617
2243	166	3001974	0		12	Gdor. Quiroz N° 847	3100	1	\N	2012-05-16 12:40:17	612
2241	155	3001929	0	Las Delicias		Villa Gobernador Luis F. Etchevehere Snº	3114	1	\N	2012-05-24 11:53:21	615
2246	166	3002017	0	N. Rivero	20	San Lorenzo y Villaguay	3200	1	\N	2012-05-16 12:40:29	579
2274	163	3002231	0		139	Urquiza 289 y Pellegrini	3174	1	\N	2012-05-16 12:47:22	623
2296	160	3002256	0		174	Gimenez y Echague	2840	0	\N	2011-09-16 10:25:38	592
2298	160	3002258	0		177	San Martín N° 163	2840	1	\N	2011-09-16 10:25:38	592
2299	160	3002259	0		182	Caseros y Echazarreta S/N	E2843	1	\N	2011-09-16 10:25:38	591
2315	165	3002280	0	Juan XXIII	18	Rioja N° 358	3127	1	\N	2011-09-16 10:25:38	609
2317	165	3002282	0	Raúl Jorge Bueno	157	Pronunciamiento N° 512	3100	1	\N	2011-09-16 10:25:38	612
2302	160	3002262	0		173	Tercer Distrito	2843	1	\N	2012-01-12 12:07:10	1546
2323	165	3002288	0	Camila Nievas	46	Camila Nievas N°78	2820	1	\N	2012-01-12 12:24:57	593
2502	155	3002565	0	José Hernández	155	Ruta Provincial Nº 37	0000	1	\N	2012-09-04 21:00:55	618
2336	167	3002306	0	Centro de Formación Profesional (C.F.P.) N° 01	04	Casiano Calderón Nº 1932	3100	1	\N	2012-12-06 14:53:08	612
2318	165	3002283	0	Nuestra Señora de Fátima	123	Boulevard Lino Churruarin N° 1247	3265	1	\N	2012-09-20 21:10:38	1459
2342	155	3002314	0		145	Barón Hirsch Nº 175	3170	1	\N	2012-12-06 13:27:46	624
2335	160	3002305	0		07	San Lorenzo N° 1095	3133	1	\N	2012-12-05 11:49:02	611
2228	159	3001792	0	Dr. Luis C. Ingold		Boulevard Churruarin N° 1410	E3265ALW	1	\N	2012-12-06 14:38:15	1459
2339	160	3002310	0	Centro de Formación Profesional	29	Hermano Borja Nº 79 / Ramírez 520	3101	1	\N	2012-12-06 11:52:02	581
2345	167	3002319	0	Centro de Formación Profesional N° 56	7	Catamarca y 3 de Marzo	3262	1	\N	2012-12-06 13:01:53	1458
2325	165	3002290	0	Nazareth	160	Saenz Peña y Perito Moreno	2820	1	\N	2012-12-06 15:05:50	593
2473	156	3002486	0		61	Brown Nº 153	3200	1	\N	2012-12-06 15:34:11	579
2322	165	3002287	0	Don Bosco	159	Chacabuco Nº 751	3260	1	\N	2013-02-18 13:04:41	625
2319	165	3002284	0	Leónidas Acosta	48	España N° 649	3190	1	\N	2013-02-18 14:52:02	600
2551	164	3002818	0	Localidad Cerrito		Av. Racedo y Enrique Albornoz (Planta Alta)	3122	1	\N	2012-05-24 10:05:49	607
2370	163	3002350	0		449	Presidente Perón y 25 de Mayo	3180	1	\N	2012-05-16 12:48:23	590
2523	163	3002754	0		457	Aguirre Almada y Rivadavia	3180	1	\N	2012-05-16 12:48:34	590
2334	166	3002303	0		24	Isabel La Catolica N° 1098	3240	1	\N	2012-05-23 12:44:44	629
2569	155	3002867	0	Horacio Mann	153	Ruta 11 Km 58 Snº - Acceso a Costa Grande	3105	1	\N	2011-09-16 10:25:38	584
2573	165	3002919	0	Sirio Libanesa	199	Ayacucho N° 774	2820	1	\N	2011-09-16 10:25:38	593
2577	160	3003034	0		15	9 de Julio Nº 425	3216	1	\N	2011-09-16 10:25:38	619
2575	167	3003030	0		04	25 de Mayo N° 154	2854	1	\N	2011-10-28 12:56:11	594
2571	166	3002877	0		17	Maipú N° 522	3100	1	\N	2012-05-16 12:40:51	612
2578	166	3003036	0		28	Calle Andres Pazos N° 144	3100	1	\N	2012-05-16 12:41:03	612
2579	160	3008719	0		19	Colón y 9 de Julio Snº	3122	1	\N	2012-05-21 08:39:27	607
2572	160	3002898	0		103	Colateral Aguirre Almada y Rivadavia	3180	1	\N	2012-05-21 09:14:21	590
2564	155	3002847	0		151	Ruta Prov. N° 48 KM 1	3192	1	\N	2012-12-05 11:59:30	601
2568	155	3002864	0	Manuel María Calderón	152	Av. de los Eucaliptus Sn°	3200	1	\N	2012-12-05 15:20:18	579
2576	167	3003031	0	Juan Domingo Perón	01	Camino Vecinal Ejido Norte (Funciona Local Escuela Nº 9 S.S. Juan Pablo Ii)	3187	1	\N	2012-09-05 23:55:43	617
2580	167	3002483	0	 "15 de Noviembre" Anexo de Formación Profesional de Gualeguaychú	3	Rawson 315, esquina Rioja (Nuevo edificio desde 06/2012)	2820	1	\N	2013-02-26 12:06:17	593
3202	300	5400071	0	Nuestra Señora de Loreto	04	Ruta Nacional N°12 Km 1392 Snº	3316	1	\N	2012-05-28 12:01:20	1439
3208	292	5400279	0	Superior Adventista Juan Bautista Alberdi	1001	Av Rusia N° 410	3315	1	\N	2012-07-02 12:43:46	1346
3200	286	5400060	0	Adolfo Kolping	1112	Nahuel Huapi N° 62	3334	1	\N	2012-07-05 11:29:50	864
3212	270	5400509	0		1308	Rio Negro N° 144	3360	1	\N	2012-07-11 10:47:51	869
3230	295	5400619	0	San Antonio - Anexo Comercial	10	Trípoli Nº 3329	3300	1	\N	2012-07-11 10:49:33	842
3234	273	5401739	0	Anexo E.P.E.T. N° 10		Yerbal N° 81	3334	1	\N	2012-08-16 11:26:58	864
3298	273	5401200	0	Misión Jesuítica	01 (4071)	Comandante Andresito SN°	3384	1	\N	2012-08-17 11:36:07	867
3205	284	5400225	0		13	Chacra N°10 - Sarmiento 578	3357	1	\N	2013-06-25 12:39:48	1172
3233	284	5400624	0	Dr. Luis Federico Leloir	10	Yerbal N° 81	3334	1	\N	2013-06-25 14:10:09	864
3213	292	5400524	0	Virgen de Itatí	419	Tierra del Fuego y Lopez Torres	3300	1	\N	2013-01-14 13:25:57	842
3214	292	5400541	0	Para Adultos Beato Adolfo Kolping	422	Av. Padre Adolfo Kolping entre Tacuarí y Centenario	3300	1	\N	2013-01-18 15:57:47	842
3238	282	5400637	0	Martín de Moussy	01	San Lorenzo N° 2199 -esquina Catamarca	3300	1	\N	2011-09-16 10:25:40	842
3268	270	5400885	0	De Informática	1206	Sarmiento Sn°	N3381	1	\N	2011-09-16 10:25:40	868
3223	284	5400570	0	Apóstoles Fray Luis Beltrán	5	Moreno N° 1555 y Tucumán	3350	1	\N	2012-05-30 10:06:04	832
3286	274	5401071	0	Beato Arnoldo Janssen	418	Av. Sta. Catalina y Av. Ituzaingó	3300	1	\N	2011-09-16 10:25:40	842
3287	292	5401077	0	Línea Cuchilla	1104	Av Pastor Jorge Bäsclin S/N Ruta Provincial 223 Snº	X3334AAI	1	\N	2011-09-16 10:25:40	865
3291	298	5401173	0	Combate de Mbororé	448	Av Leandro N Alem N° 5290 (Esquina Av Zapiola)	3300	1	\N	2012-06-28 20:15:44	842
3266	292	5400882	0	Nuestra Señora de los Milagros	1208	Ruta Prov. N° 16 - Km 1	3381	1	\N	2012-06-25 23:04:13	868
3235	298	5400627	0	Centro Educativo Integral San Jorge	429	Bº San Jorge Snº	3300	1	\N	2013-02-08 12:42:26	842
3241	284	5400647	0	O.E.A.	04	Av. Victoria Aguirre N° 278	3370	1	\N	2013-06-26 11:42:15	870
3274	284	5400927	0		08	Otto Krause N° 872	3364	1	\N	2013-07-04 12:58:33	834
3251	284	5400711	0		06	La Colina N° 1575, (antes: Av. San Martin N° 3103 Oeste)	3380	1	\N	2013-07-04 11:41:15	846
3256	300	5400765	0		01	Sarmiento Sn° Lote 144	3317	1	\N	2013-07-04 12:08:33	836
3267	284	5400884	0	Celulosa Argentina	15	Av. República Argentina S/N°	3381	1	\N	2013-07-04 12:36:34	868
3279	284	5400998	0		07	Peru y Colombia Sn°	3328	1	\N	2013-07-04 15:31:11	871
3284	268	5401066	0	San Antonio	3601	Ruta Nacional N° 101 Km 452	3366	1	\N	2013-07-05 11:12:46	1438
3283	270	5401049	0	Hernando Arias de Saavedra	432	Félix de Azara N° 1407	3300	1	\N	2012-07-11 11:00:06	842
3260	273	5400817	0		12	Manzana N° 70 Ruta Provincial N° 3 Sn°	3309	1	\N	2013-02-08 14:39:18	837
3232	292	5400622	0	San Alberto Magno	1101	Verbo Divino N° 24	3334	0	\N	2013-03-01 14:32:39	864
3292	292	5401133	0	Nuestra Señora del Iguazú	903	Av. San Martín Snº	3376	1	\N	2011-09-16 10:25:40	856
3299	273	5401201	0	Centro Tecnológico de la Madera	02 (4072)	Facundo Quiroga Sn°-	3384	1	\N	2011-09-16 10:25:40	867
3300	273	5401202	0		01	Av. Lavalle N° 1947	3300	1	\N	2011-09-16 10:25:40	842
3303	270	5401217	0	De Estudios Terciarios y Técnicos	452	Catamarca N° 1550	3300	1	\N	2011-09-16 10:25:40	842
3304	292	5401219	0	Argentino de Estudios Superiores	914	Av Guaraní N° 138	3370	1	\N	2011-09-16 10:25:40	870
3305	270	5401221	0	Argentino de Estudios Superiores (I.A.E.S.)	1114	Av. San Martín Nº 1860	3334	1	\N	2011-09-16 10:25:40	864
3307	498	5401253	0		02	Luchessi Casi Av. Aguado	3300	1	\N	2011-09-16 10:25:40	842
3301	280	5401203	0		28	Calle 1° Mayo Sn°	3384	1	\N	2012-01-17 11:32:33	863
3271	300	5400913	0		02	Durañona Sn°	3352	1	\N	2012-05-28 12:19:15	1436
3311	275	5401268	0	Leandro N. Alem	1008	Amèrica Nº 727	3315	1	\N	2011-09-16 10:25:40	1346
3312	275	5401269	0	Cristiano Internacional	1009	San Martín Sn°	3315	1	\N	2011-09-16 10:25:40	1346
3313	275	5401279	0		02	Calle Nº 74 y Av. Zapiola Chacra 112	3300	1	\N	2011-09-16 10:25:40	842
3315	270	5401289	0	De Informática Virasoro	1310	Sargento Cabral Nº 969	3360	1	\N	2011-09-16 10:25:40	869
3319	292	5401296	0	Instituto de Alto Rendimiento San Agustín	106	Ruta Nº 1 y Mendoza Snº	3350	1	\N	2011-09-16 10:25:40	832
3322	275	5401313	0	Montecarlo	1209	Calle Facundo Quiroga Snº	3384	1	\N	2011-09-16 10:25:40	867
3326	275	5401332	0		01	Av. Cocomarola Snº	3300	1	\N	2011-09-16 10:25:40	842
3327	292	5401335	0	Privado de Alta Capacitación (I.P.A.C.)	468	San Lorenzo Nº 2236	3300	1	\N	2011-09-16 10:25:40	842
3310	275	5401267	0	Iguazú	915	Ruta Nacional 12 Km 3,5 Snº	3370	1	\N	2012-07-04 12:52:14	870
3309	286	5401263	0	Juan Manuel de Rosas	456	Ayacucho Nº 1640	3300	1	\N	2012-06-28 20:12:32	842
3277	284	5400988	0		11	Guayubira Nº 172	3384	1	\N	2013-07-04 15:16:30	867
3331	286	5401382	0	Comandante Andrés Guacurarí	1654	Alte. Brown Sn°	3371	1	\N	2011-09-16 10:25:40	848
3336	498	5401480	0		1	Complejo Habitacional A-3-2. Miguel Lanus	3300	1	\N	2011-09-16 10:25:40	842
3324	270	5401315	0		1311	Santa Fé N° 371	3360	1	\N	2012-01-16 11:35:38	869
3334	286	5401394	0	Manuel Giudici		Romulo Dalmaroni y Capitán Giachino	3355	1	\N	2012-01-16 11:47:21	843
3329	551	5401368	0		1653	Martín Zukowski Sn°	3313	1	\N	2012-01-17 09:27:42	858
3333	275	5401393	0		03	Av. Juan Pablo II Sn°	3304	1	\N	2012-06-01 12:40:22	841
3332	271	5401385	0	Puerto Esperanza	1655	Tte. Estévez N° 850	3378	1	\N	2013-04-11 13:12:46	853
3337	270	5490003	0	Antonio Ruiz de Montoya	880	Ayacucho N° 1962	3300	1	\N	2012-06-28 22:17:15	842
3330	284	5401376	0		16	Av. Corrientes y Antartida Argentina	3337	1	\N	2013-07-05 11:19:39	835
3335	284	5401396	0	Centro Tecnológico de la Madera	17	Facundo Quiroga SN°	3384	1	\N	2013-07-05 11:39:07	867
4731	284	5401415	0		19	Cerro Santa Ana Snº	3316	1	2009-06-03 15:28:43	2013-07-05 11:59:15	1435
4758	284	5401414	0		18	Entre Ríos y La Pampa S/N°	3378	1	2009-07-02 11:49:03	2012-01-16 10:13:00	853
4759	284	5401495	0		21	Calle Juan Domingo Perón N° 361	3356	1	2009-07-02 11:59:02	2013-07-05 12:29:42	1345
4732	284	5401494	0		20	25 de Mayo entra Buenos Aires y Chacabuco	3352	1	2009-06-03 15:36:20	2013-07-05 12:10:24	1436
4760	284	5401496	0		23	Calle 18 de Julio S/N°	3355	1	2009-07-02 12:05:29	2013-07-05 12:35:30	843
4764	284	5401481	0		22	Ruta Provincial N° 17 Km 29	3380	1	2009-07-07 11:15:57	2013-07-05 12:04:18	1349
4807	163	3004022	0		140	Panizza 28	3174	1	2009-07-30 10:26:58	2012-05-16 12:48:45	623
4862	105	1800050	0	Comercial Julia Joaquina Lopez de Pérez		9 de Julio y Urquiza	3480	0	2009-08-26 15:47:16	2012-10-23 11:22:29	1520
4928	270	5401436	0	Multiversidad Popular	469	Av. Blas Parera N° 5160	3300	1	2009-11-02 14:50:18	2011-09-16 10:25:43	842
4944	284	5401526	0		24	Paraje Yacutinga, Ruta Nacional N° 101	3385	1	2009-11-19 16:12:45	2012-03-16 09:05:40	848
4973	275	5401541	0		2	Av. Andrés Guacurarí Sn°	3327	1	2010-01-05 08:39:38	2011-09-16 10:25:43	1552
4974	160	3002994	0		233	Av. Artigas Sn°	2840	0	2010-01-08 09:06:07	2011-09-16 10:25:43	592
4975	160	3002497	0		180	Remedios Escalada de San Martín	2840	0	2010-01-08 09:19:29	2011-09-16 10:25:43	592
4963	113	1801688	0	Libertador General Don José Francisco de San Martín		J. Alfredo Ferreira y Virasoro	W3470CXT	1	2009-12-16 08:47:03	2013-01-21 14:30:59	1464
5075	516	3003040	0	San Roque	210	Eva Perón y Junín	3105	1	2010-08-19 15:09:47	2012-12-05 15:07:18	582
5054	160	3003121	0		2	Andrés Pazos N° 339	3100	1	2010-06-14 10:00:34	2012-12-06 12:42:50	612
5052	167	3003123	0	María Reina Inmaculada	191	Dorrego y Neuquén Sn°	3100	1	2010-06-14 09:43:02	2013-05-10 12:30:49	612
5058	108	1801394	0	San Antonio I Prof. 5		Lisandro de la Torre y Ñaembé sin Número	3342	1	2010-06-23 13:30:30	2013-05-31 13:16:04	524
5070	284	5401557	0		25	Fray Luis Beltrán y Sarmiento	3362	1	2010-08-03 12:58:38	2013-07-05 12:43:56	1564
5114	284	5400906	2		14	Capiovicito Ruta N° 12 S/N	3332	1	2010-11-08 13:33:20	2011-09-16 10:25:43	862
5117	284	5401584	0		27	Barrio Obrero	2010	1	2010-11-09 11:21:11	2011-09-16 10:25:43	863
5118	498	5401577	0		3	Calle Rademacher N° 4745	3300	1	2010-11-09 11:27:35	2011-09-16 10:25:43	842
1944	109	1801416	0	Ernesto Sabato		Zelmira de Luca de Soto y Libertad S/N°	3346	1	\N	2012-07-03 11:18:35	518
1952	112	1801430	0	Instituto de Formación y Capacitación Cruz Roja Argentina Filial Corrientes		Bolivar 1219	W3400AMW	1	\N	2011-09-16 10:25:37	491
3201	292	5400062	0	Centro Educativo Alas y Raíces	438	Santa Fé Nº 1784	3300	1	\N	2011-09-16 10:25:40	842
3255	292	5400745	0	Santa Catalina	408	Av. Leandro N. Alem Nº 3220	N3300	1	\N	2011-09-16 10:25:40	842
3316	270	5401290	0	Incade Argentina	460	San Lorenzo N° 1620	3300	1	\N	2012-01-16 11:50:02	842
5035	112	1800675	1	Curuzú Cuatiá Sub Sede Sauce		Moreno N° 674	3463	1	2010-04-21 16:37:01	2011-09-16 10:25:43	1553
5053	168	3001221	0	Localidad Villa Paranacito		Av. entre Ríos N° 222	E2823XBC	1	2010-06-14 09:53:38	2012-07-02 13:34:44	597
3209	597	5400312	0		1109	Calle J.M Estrada N° 210	3332	1	\N	2012-07-11 10:40:58	862
3236	270	5400635	0		427	Salta N° 1968	3300	1	\N	2012-07-11 10:58:57	842
5101	271	5401370	0	Uruguaí	919	25 de Mayo y Av. Juan Domingo Perón	3374	1	2010-10-19 15:18:28	2011-09-16 10:25:43	1558
5045	270	5400509	1	Anexo	1308	Pomar y Guemes	3364	1	2010-05-14 11:52:44	2012-01-16 11:53:12	835
5100	168	3001523	0	María Ines Elizalde		Gervasio Mendez N° 676	E2822APH	1	2010-10-19 15:11:15	2012-07-02 13:34:01	593
5076	112	1801650	0	UOCRA - I. S. F. T. Islas Malvinas		Neuquén N° 1470	3400	1	2010-08-24 13:36:09	2012-08-31 20:48:13	491
5065	109	1801419	1	Anexo Mburucuyá 		Lavalle N° 281	3427	1	2010-07-29 14:05:38	2013-04-09 16:32:25	509
5388	160	3002877	2		206	Don Bosco N° 749	3100	1	2011-12-20 08:27:37	2011-12-20 08:27:37	612
1915	544	1801192	0	Escribano Pedro Leconte		Constitución s/n°	3401	1	\N	2012-06-18 11:53:01	1284
2207	166	3001605	0	Josefina Zubizarreta	3	Av.Estrada N° 1057	3100	1	\N	2012-05-16 12:39:59	612
2301	163	3002261	0	Escuela Colón Nº 38	510	R.E. San Martín	2840	1	\N	2012-05-16 12:48:07	592
1935	543	1801406	0	de Mburucuyá	23	Eustaquio Miño y Almirante Brown	W3427ASP	1	\N	2012-09-05 21:18:35	509
2470	160	3002482	0		2	Isthilart y Güemes Snº	3200	1	\N	2012-12-05 14:50:40	579
2153	167	3001086	0	Olegario Victor Andrade	2	Alfredo Palacios Nº 83 (Por ampliación dirección provisoria: Corrientes y Primero de Mayo)	2840	1	\N	2012-12-06 12:23:20	592
1881	106	1800532	0	Anexo Formación Profesional		Calle Catamarca s/n°	W3421XAB	1	\N	2012-06-18 11:58:11	1462
1973	105	1801644	1	Carmen Molina del Llano - Anexo San Vicente de Paul		Mendoza N° 1362	W3400BZE	1	\N	2012-01-16 09:32:42	491
3203	270	5400141	0	De las Misiones	909	Av. San Martín Sn°	3376	1	\N	2012-06-15 12:50:17	856
3306	286	5401241	0	Loc. San Pedro	1652	Calle Juan Queirel y Catamarca	3352	1	\N	2013-05-21 12:24:18	1436
5286	284	5401634	0	San José Obrero	30	Av. Centenario SN°	3306	1	2011-07-13 14:48:44	2013-06-11 14:59:36	1437
5350	300	5401706	0		6	Sección Novena, Paraje Sierra Oro, Lote 295 Lote R-1	3362	1	2011-10-19 12:45:01	2013-06-11 15:07:56	1564
3210	290	5400371	0	San Conrrado	606	Ruta Provincial N° 17 Km. 17	3308	1	\N	2012-03-01 09:10:05	845
5392	284	5401720	0		28	Paraje Gentil Km. 1348	3352	1	2012-02-17 12:12:27	2012-06-11 09:41:39	1436
3321	290	5401311	0	San Arnoldo Janssen	917	Calle P.Amans Laka	3378	1	\N	2012-03-01 09:24:54	853
3216	290	5400551	0	Santa Teresita	1004	Ruta Nº 4 Km 40	3315	1	\N	2012-03-01 09:10:58	1346
3270	290	5400908	0	San Wendelino	1108	Paraje Capioviciño Sn°	3332	1	\N	2012-03-01 09:20:04	862
5391	300	5401678	0	Localidad Colonia Victoria	5	Ruta Nacional N°12 KM 1558	3380	1	2012-02-10 11:26:45	2013-06-11 15:04:12	1613
5361	107	1801634	0	Peju Pora	IS 53	Paraje Paso Tala	3461	1	2011-10-27 11:17:52	2012-07-10 15:58:39	1607
1926	107	1801349	0	Ñande Sy La Itatí	18	Paraje Malvinas	3196	1	\N	2012-07-30 14:50:55	497
5240	290	5401619	0	San Antonio	107	Lote 203	3351	1	2011-05-12 14:23:52	2012-06-15 11:55:03	1581
3275	290	5400928	0	San Bonifacio	205	Ruta Nac. Nº 14 Km 926	3304	1	\N	2012-04-19 09:41:56	834
3224	290	5400578	0	Espíritu Santo	804	Mariano Moreno N° 289	3338	1	\N	2012-03-01 09:13:06	851
3229	290	5400617	0	San Vicente de Paul	803	Ruta Nacional N°14 Km 974 Snº	N3356CUA	1	\N	2012-03-01 09:14:02	1345
3257	290	5400781	0	Santa María Goretti	704	Lote 121 a VII Sur - Calle Chile Sn°	3385	1	\N	2012-06-18 08:32:09	848
3225	290	5400596	0	Santa Rita	1701	Camino Vecinal Sn° - a 300 Mts. de la Ruta Provincial N° 8	3363	1	\N	2012-03-01 09:13:32	875
1899	107	1800839	0	Santa Lucía	IS 9	Paraje La Bolsa	W3440ALE	1	\N	2012-07-11 11:23:47	507
1927	107	1801350	0	Anahí	I.S.-19	2° Sección - Paraje Casualidad	W3450EUP	1	\N	2012-07-11 11:24:40	501
1943	107	1801514	0	Esperanza Campesina	IS-21	Coronel Schueizer 5° Sección Cuchillas	W3196ALL	1	\N	2012-07-11 11:30:43	496
1969	107	1801571	0	Mensú Peguará	I.S 46	1° Sección Baibiene. Curuzú Cuatiá. Ruta N° 119 Km. 70	3460	1	\N	2012-12-10 13:17:31	493
1956	107	1801462	0	Tupa Rembiapo	IS 27	Ingenio Primer Correntino	3401	1	\N	2012-07-11 11:31:44	1284
1963	107	1801503	0	Jahá Katú	IS - 29	Ruta Nac. N° 12 - Km 712	W3450ENN	1	\N	2012-08-01 12:26:46	500
1966	107	1801567	0	Ñanemba´e	49	Paraje Salinas Grandes	3445	1	\N	2012-08-01 12:34:22	506
1967	107	1801568	0	Renacer	47	Calle Poi s/n°	3420	1	\N	2012-08-01 12:48:12	514
1897	111	1800832	0			Cuarta Sección Rural S/Nº	W3418XAL	1	\N	2012-08-31 22:41:08	495
1968	107	1801570	0	La Cruz	IS - 45	Ruta Nacional N° 14 -paraje Izoqui-	3346	1	\N	2012-07-11 11:34:43	518
1954	107	1801452	0	Mocoví	23	Colonia Mota S/N°	3226	1	\N	2012-07-23 13:05:33	511
1962	107	1801502	0	Itú	28	Camino Alternativo - Rincón Santa María-	3302	1	\N	2012-08-01 12:19:59	1463
3288	290	5401082	0	Concepción de la Virgen María	501	Paraje Persiguera - Colonia Santa María	3354	1	\N	2012-03-01 09:21:21	1309
3323	290	5401314	0	San José Freynademetz	1210	Acceso Asfaltado a Colonia Caraguatay Km 8 Snº	3384	1	\N	2012-03-01 09:25:00	866
4835	290	5401356	0	Cristo Rey	1313	Lote 56 Sección "G"	3361	1	2009-08-12 12:35:37	2012-03-01 09:25:16	1485
3259	290	5400796	0	San Ignacio de Loyola	1405	Villa Ema Snº	3322	1	\N	2012-07-11 13:07:25	872
3272	290	5400917	0		1602	Ruta Nacional 14	3352	1	\N	2013-01-07 12:11:47	1436
3308	290	5401262	0	Jesús de Galilea	209	Ruta Nacional 14 Km 955	3337	1	\N	2013-06-18 12:52:59	835
3295	290	5401168	0	San Bernardo	706	Ruta Nacional 101	3366	1	\N	2013-06-18 11:05:50	1174
5393	107	1801719	0	Colonia Unión	IS 71	Colonia Unión	W3342ZAA	1	2012-02-22 09:11:34	2012-07-11 11:39:00	524
3265	276	5400869	0	Primera Imprenta	05	Libertad y Ordóñez Snº	3357	1	\N	2013-01-22 13:43:32	1172
3207	284	5400278	0		38	E. Hidalgo y Los Pensamientos	3315	1	\N	2013-06-12 15:30:43	1346
3247	278	5400688	0	Mariano Moreno	06	Ayacucho Nº 1441	3300	1	\N	2013-06-27 11:11:43	842
5312	288	5400893	0		1954	Colón N° 1209	N3300LXA	1	2011-08-29 11:34:24	2012-03-01 09:19:47	842
3290	298	5401103	0	Carlos Linneo	1302	Gobernador Barreyro Nº 947	3360	1	\N	2012-05-24 09:16:53	869
2258	153	3002156	0		50	Pellegrini N° 168	3177	1	\N	2012-12-03 13:14:42	622
2574	154	3003002	0	Santa Elena		Villa Universitaria	E3192BUJ	1	\N	2012-06-25 23:58:25	602
3325	293	5401325	0		07	Calle 133 y 176/ Av. 147 y Bulevar 170	3300	1	\N	2013-01-21 13:59:23	842
3221	278	5400563	0	Juan José Lanusse	03	Lanusse Nº 459	3350	1	\N	2012-06-27 20:13:28	832
2490	154	3002513	0	Cruz Roja - Gualeguay	79	Remedios Escalada de San Martín Nº 5	2840	1	\N	2013-02-25 13:33:33	592
1946	109	1801420	0	Ramón J. Carcano		Colón Nº 880	3220	1	\N	2012-07-03 11:21:03	512
3294	290	5401167	0	Agrotécnica América	1409	Lote 19 - Fracción B-5	3328	1	\N	2012-07-03 12:12:33	871
5481	284	5401526	1	Anexo Formación Profesional	24	Homero Jauregui SN°	3385	1	2012-09-12 23:27:30	2012-09-12 23:27:30	848
2503	154	3002719	0	Sur	136	Corrientes N° 284	3100	1	\N	2013-02-25 13:25:26	612
2227	159	3001783	0	Dr. Antonio Sagarna	784	Boulevard Sarmiento N° 1056	3150	1	\N	2012-06-26 21:18:09	605
2175	159	3001309	0	Republica Oriental del Uruguay		12 de Abril N° 236	3280	1	\N	2012-06-26 21:25:33	1457
4854	109	1801466	0	Juan García de Cossio		San Martín N° 1145 Planta Alta	W3448BCH	1	2009-08-26 12:43:55	2012-09-06 23:55:21	795
5299	154	3003069	0	Gaspar Benavento		Congreso N° 726	3153	1	2011-08-08 10:32:58	2012-12-05 13:50:52	628
1874	109	1800320	0	Jorge Luis Borges		San Martín Nº 550	3340	0	\N	2012-12-10 13:11:46	1137
4927	109	1801466	1	Juan García de Cossio Anexo Caá Cati		Calle Gordiola Niella entre Sarmiento y Blanco Vega	W34074CN	1	2009-10-23 12:07:35	2012-07-03 11:22:42	499
5436	290	5401757	0	Santos Mártires	302	Lote 5 Fracción E Manzana 16	3318	1	2012-06-28 23:54:02	2013-06-13 13:05:18	1625
4964	109	1801466	2	Juan García de Cossio  Susede: Gobernador Martínez		Libertad s/n°	W3445	1	2009-12-16 09:09:12	2012-12-10 13:18:30	506
2219	167	3001735	1	Osvaldo Magnasco - Anexo de FP	1	Misael Parodi N° 130	3174	1	\N	2012-09-07 21:09:58	623
5384	273	5400711	1	Anexo EPET N° 6		La Colina N° 1575	3380	1	2011-12-05 12:22:30	2012-07-03 12:59:55	846
3289	298	5401099	0	S.O.S. Hermann Gmeiner	C-1304	Pergamino Nº 1243	3360	1	\N	2012-07-03 15:15:17	869
1949	112	1801426	0	Instituto Superior Goya		Ñaembe y Policia Federal	3450	1	\N	2012-07-23 12:15:17	501
4942	292	5400070	0	Juan Pablo II	1107	López y Planes N° 2441	3334	1	2009-11-19 12:28:54	2012-11-12 23:41:32	864
1970	107	1801572	0	Guayquiraró	48	Rincón de Guayquiraro	3194	1	\N	2012-07-10 15:56:50	497
1893	107	1800731	0	Ñande Roga	I-36	Ruta Nac. N° 118 - Km. 144	W3485XAU	1	\N	2012-07-26 15:10:46	519
5441	298	5401284	0	Leonardo Da Vinci	1410	Bolivar entre Sargento Cabral y Urquiza	3322	1	2012-07-11 12:42:15	2012-07-11 12:54:47	872
2162	504	3001147	0		01	Quiroga y Taboada Nº 1510	3150	1	\N	2012-11-06 15:28:39	605
5446	108	1801359	0	Movimiento de Educación Popular Integral Fé y Alegría	31	Brazategui y Pergamino	3400	1	2012-07-13 12:10:50	2012-07-13 12:13:41	491
5444	99	1801425	0		9	Cerdeña N° 5500	3400	1	2012-07-12 13:07:04	2012-07-25 15:01:33	491
5276	109	1801218	2	Subsede Ituzangó		Calle Buenos Aires y Apipé	3302	1	2011-07-04 12:41:30	2012-08-10 15:35:55	1463
5485	623	5401252	0	de Formación Integral	4	Calle Alberto Roth	3304	1	2012-09-20 20:39:50	2012-09-20 20:39:50	841
1928	107	1801370	0	Arandú Roga	IS 22	2° Sección - Cañaditas	3463	1	\N	2012-12-10 13:18:00	526
1931	100	1801402	0	Don Elías Abad		Av. Independencia Nº 5751	W3404DMB	1	\N	2012-07-25 10:44:48	491
5450	108	1801162	0	Instituto Pelletier	4	Tucumán N° 760	W3400BNH	1	2012-07-26 12:11:30	2012-07-26 12:24:03	491
5449	109	1801467	1	María Luisa Román de Frechou - Subsede Santa Rosa		Ruta Nacional N° 118	3423	1	2012-07-25 14:42:01	2012-07-25 14:42:01	1462
5447	108	1801212	0	San Benito  	11	Necochea	W3410AVH	1	2012-07-25 12:41:41	2012-11-06 15:08:46	491
1920	107	1801222	0	Coembota	IS16	Paraje Maruchas	3450	1	\N	2012-07-26 11:12:00	501
5486	623	5401067	0	República de Polonia	5	Av. Sarmiento N° 724	3350	1	2012-09-20 20:52:01	2012-09-20 20:52:01	832
5463	273	5401624	0		6	Lanusse entre Av. 9 de Julio y Belgrano	3350	1	2012-08-15 10:19:13	2012-08-31 19:52:42	832
5460	273	5401652	0		8	Av. Del Libertador y Pueyrredón	3313	1	2012-08-14 12:52:24	2012-08-31 20:14:38	858
5459	273	5401731	0		19	El Yerbal y América	3315	1	2012-08-14 11:28:35	2012-08-31 20:15:18	1346
5465	273	5401740	0		14	Av. Ramón Puerta S/N y Ruta Nac N°12	3326	1	2012-08-15 11:11:52	2012-08-31 20:15:51	1628
5464	292	5400972	0	Familiar Gumercindo Esquivel	602	Av. San Martín N° 3347	3380	1	2012-08-15 11:01:13	2013-01-23 13:06:02	846
5258	292	5401583	0	Padre Kolping	1116	Los Gladiolos N° 555 esq. Las Dalias	3332	1	2011-06-10 14:24:45	2013-01-14 14:44:22	862
5475	293	5401317	0	Anexo Formación Profesional	3	B° Nuevo Garupá	2011	1	2012-08-30 20:39:47	2012-08-30 20:54:39	841
5476	108	1801390	0	Nuestra Señora de Itatí	6	Obispo Niella y Castor de León	3414	1	2012-08-31 20:55:04	2013-05-31 13:02:18	502
2197	167	3001507	0	Dr. Héctor B. Sauret	13	Sna Martín N° 1169	3260	1	\N	2012-12-05 12:13:15	625
1936	110	1801407	0	Hijas de María		Juan Perelló 295 E/ Tambor de Tacuarí y Caá Guazú	W3423AWE	1	\N	2012-09-13 22:51:35	1255
1870	102	1800294	0	Dr. Mamerto Acuña		Centenario Nº 951	W3344AOQ	1	\N	2012-09-14 20:45:14	498
5396	544	1801432	0	Fray José de la Quintana		Calle N° 202 (Entre Renacimiento y Yugoslavia)	3400	1	2012-03-19 12:37:43	2012-09-14 20:58:53	491
5487	273	5401487	0	Anexo Ciclo Básico Secundario N°1		Centro Cultural Barrio San Isidro	3300	1	2012-09-20 21:10:01	2012-09-20 21:10:01	842
2563	155	3002846	0		150	Colonia La Argentina	3206	1	\N	2012-09-25 23:40:56	587
5494	108	1801482	0	Santa María de Los Angeles 	24	Remedios de Escalada N° 5050	W3404FLL	1	2012-10-05 20:27:18	2013-05-31 13:00:41	491
4806	298	5400012	0	Los Lapachos	905	Av. San Martín N° 261	3378	1	2009-07-28 10:44:04	2012-11-12 20:08:29	853
3242	276	5400662	0	Granadero Lorenzo Napurey	08	Ruta Nacional N° 12 Km 7 y Av. de las Palmeras - Complejo Habitacional A-3-2- Miguel Lanus	3300	0	\N	2012-11-23 12:00:29	842
5227	112	1800320	1	Sub Sede Alvear "Jorge Luis Borges" 		Calle Centenario N° 951	W3344	0	2011-04-27 11:41:33	2013-03-01 14:57:18	498
2193	503	3001494	0	Almafuerte		Ruta Nacional N° 12 Km 23 y 1/2	3118	1	\N	2012-12-06 12:50:51	612
2148	503	3000992	0	Juan Bautista Alberdi	1	Ruta Prov. 11 Km 10,5	3100	1	\N	2012-12-05 12:06:54	1541
2156	157	3001110	0	Celestino Irineo Marcó	8	Carmen Gadea N° 20	2840	1	\N	2012-12-05 13:00:12	592
2240	155	3001928	0	Hipólito Yrigoyen	40	Ruta Nacional 127 Km. 88 Snº- Hasenkamp	3134	1	\N	2012-12-05 13:53:28	608
2181	167	3001343	0	Dr. Pedro Radio	01	España Nº 474	3153	1	\N	2012-12-05 15:14:18	628
2171	155	3001237	0	General José de San Martín	24	Ruta Nacional 14 Km. 244	3201	1	\N	2012-12-06 12:10:15	578
3282	292	5401047	0	Taller Espíritu Santo	405	España N° 2729	3300	1	\N	2013-01-18 15:54:32	842
2367	516	3002346	0	Escuela Privada de Capacitación Laboral para la Formación Profesional	149	Ecuador 341	3187	1	\N	2013-02-07 13:29:54	617
5528	623	5400276	0		2	La Rioja N° 667 Villa Erasme	3360	1	2013-02-08 13:38:40	2013-02-08 13:38:40	869
5542	154	3001551	0	Diamante		Sarmiento N° 325	3105	1	2013-02-25 15:02:07	2013-02-25 15:02:07	582
5567	291	5400798	0	BOP	35	Félix de Azara y Roque González	3304	1	2013-04-08 12:04:18	2013-04-08 12:09:29	841
5569	113	1801756	0	Santa Rosa		No declara	W3421ZAA	1	2013-04-15 11:08:44	2013-04-15 11:08:44	1462
5568	111	1801758	0	Paraje Poñi		Chacra Este	3463	1	2013-04-15 11:01:35	2013-04-15 11:47:20	526
3258	276	5400789	0	Libertador General José de San Martín	18	Av. Rademecher y Av. Comandante Espora Snº	3300	1	\N	2013-04-18 15:20:53	842
2223	167	3001757	0	Gral. J. de San Martín - Uader	35	San Martin N° 1606	3116	1	\N	2013-04-23 12:50:17	1563
3328	290	5401338	0	Santísima Trinidad	1703	Ruta Provincial N° 2 Acceso Paraje Pacífico	3363	1	\N	2013-04-24 12:58:48	1396
2172	155	3001260	0	San José Obrero	D-95	Av. Primero de Mayo N° 270	3262	1	\N	2013-05-09 13:07:16	1458
2201	155	3001541	0	Instituto Agrotécnico Gualeguaychú	D-71	Urquiza al Oeste N° 2570	2820	1	\N	2013-05-09 13:17:56	593
2150	155	3001036	0	Divina Providencia	D-100	José Pfeuffer S/N°	3180	1	\N	2013-05-09 13:23:09	589
2211	167	3001662	0	Juan XXIII	D-76	Los Ceibos y Los Zorzales	3100	1	\N	2013-05-10 12:39:17	612
2229	161	3001803	0	San Benito	D- 93	Ruta Provincial N° 11 Km 112	3153	1	\N	2013-05-10 12:57:59	628
5112	284	5400906	1	Anexo	14	Barrio San Gotardo	3332	0	2010-11-08 12:48:51	2013-05-17 14:30:49	862
5401	300	5401763	0		8	Av. Dr. Fechter S/N°	3384	1	2012-05-28 11:28:20	2013-06-18 12:49:30	867
5448	108	1801382	0	Nuestra Señora de Itatí	8	Madariaga y 6 de Mayo	W3411AKA	1	2012-07-25 14:32:24	2013-05-31 12:58:42	491
5477	108	1801397	0	María de Nazareth 	7	Hipóloito Irigoyen N° 1506	W3400ATF	1	2012-08-31 21:05:36	2013-05-31 12:59:32	491
5445	108	1801375	0	San Pablo I 	12	Gral. Paz N° 2002	W3408AWB	1	2012-07-12 15:42:37	2013-05-31 13:01:21	491
1884	112	1800657	0	No Universitario Victor Navajas Centeno	I-24	Ruta Nacional N° 14 - Km. 742	W3342BQA	1	\N	2013-05-31 13:06:46	524
5404	284	5401762	0		32	Cic Barrio Oeste	3362	1	2012-06-05 12:29:45	2013-06-11 15:59:18	1619
3297	297	5401199	0	Benjamín Matienzo		Jujuy Nº 1459	3300	1	\N	2013-06-11 14:31:16	842
3253	295	5400732	0	Juan XXIII	09	Juan XXIII Nº 159	3376	1	\N	2013-06-11 14:40:51	856
3285	268	5401070	0	Salesiana Pascual Gentilini	101	Lote A2 Campo Gentilini Sn°	N3307	1	\N	2013-06-12 13:03:44	1437
5289	284	5400209	0		35	Lote N° 17 Sección N° 11	3361	1	2011-07-18 14:39:08	2013-06-12 15:21:36	1595
5402	291	5400591	0		21	Posadas y Sagastizabal	3304	1	2012-06-01 09:03:22	2013-06-12 15:34:58	841
5437	290	5401756	0	Padre José Marx con Alternancia	1315	Av. del Té N° 327	3362	1	2012-06-29 20:27:52	2013-06-13 12:52:48	1619
3281	284	5401044	0	Eva Duarte de Perón	02	Junin N° 2360	3300	1	\N	2013-07-05 10:47:59	842
5069	284	5401562	0		26	Avenida de las Américas y Mbororé	3366	1	2010-08-03 12:47:05	2013-07-05 12:48:09	1174
3222	270	5400568	0	Cristo Rey	102	Suipacha Nº 57	3350	1	\N	2013-06-18 12:29:34	832
3198	290	5400038	0	Padre Antonio Sepp	1702	Ruta Provincial 9 	N3755AEA	1	\N	2013-06-18 12:38:56	1308
3320	290	5401309	0	San Cristóbal	464	Lote 11 Parcela 55 - Ruta Prov. Nº 205 Km 8 1/2	3304	1	\N	2013-06-18 11:42:26	840
3211	278	5400418	0	Independencia Nacional	02	Nahuel Huapi Nº 137	3328	1	\N	2013-06-25 12:56:03	871
3217	284	5400552	0		09	El Yerbal y América Sn°	3315	1	\N	2013-06-25 13:47:08	1346
3231	284	5400621	0	Unesco	01	Av. Lavalle N° 1947	3300	1	\N	2013-06-25 14:00:41	842
3199	578	5400053	0		03	Ruta Nacional N°14 Km 973	3356	1	\N	2013-06-27 11:00:23	1345
5283	284	5400225	1	Anexo	13	Paraje 3 Esquinas	3357	1	2011-07-11 15:06:21	2013-06-27 10:54:56	1172
3249	276	5400709	0	Santiago de Liniers	1	Artigas N° 150	3360	1	\N	2013-06-27 15:39:55	869
1948	112	1801423	0	U.O.C.R.A. Islas Malvinas		Neuquén Nº 1470	3400	1	\N	2013-07-02 12:35:30	491
3261	284	5400828	0		34	Sebsatopol N° 3075	3300	1	\N	2013-07-04 12:16:23	842
3262	284	5400835	0	Ing. Rubén Alberto Peralta	12	San Martín Nº 863	3322	1	\N	2013-07-04 12:27:41	872
3269	284	5400906	0		14	Av. Padre Juan May N°248	3332	1	\N	2013-07-04 12:43:25	862
3276	295	5400941	0		12	Sarmiento N° 210	3366	1	\N	2013-07-04 15:11:16	1174
\.


--
-- TOC entry 1936 (class 0 OID 18852)
-- Dependencies: 171
-- Data for Name: jurisdicciones; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY jurisdicciones (id, name, modified, created) FROM stdin;
26	Chubut	2010-07-14 11:01:51	\N
2	Ciudad de Bs. As.	2010-07-14 11:03:38	\N
14	Córdoba	2010-07-14 11:06:43	\N
18	Corrientes	2010-07-14 11:13:54	\N
30	Entre Ríos	2010-07-14 11:19:32	\N
34	Formosa	2010-07-14 11:22:13	\N
6	Buenos Aires	2010-07-14 11:23:26	\N
38	Jujuy	2010-07-14 11:26:00	\N
42	La Pampa	2010-07-14 11:27:20	\N
46	La Rioja	2010-07-14 11:32:46	\N
50	Mendoza	2010-07-14 11:34:38	\N
58	Neuquén	2010-07-14 11:37:30	\N
62	Rio Negro	2010-07-14 11:38:50	\N
66	Salta	2010-07-14 11:40:40	\N
70	San Juan	2010-07-14 11:42:36	\N
78	Santa Cruz	2010-07-14 11:47:23	\N
82	Santa Fe	2010-07-14 11:48:22	\N
86	Santiago del Estero	2010-07-14 11:49:25	\N
94	Tierra del Fuego	2010-07-14 11:50:45	\N
90	Tucumán	2010-07-14 11:51:56	\N
54	Misiones	2011-12-20 09:29:52	2011-12-20 09:29:52
22	Chaco	2012-06-04 09:00:27	2012-06-04 09:00:27
10	Catamarca	2012-06-04 09:01:28	2012-06-04 09:01:28
74	San Luis	2012-06-04 09:02:06	2012-06-04 09:02:06
\.


--
-- TOC entry 1937 (class 0 OID 18858)
-- Dependencies: 173
-- Data for Name: localidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY localidades (id, departamento_id, name) FROM stdin;
1604	269	San Jaime de la Frontera
1612	356	Gobernador Roca
1613	360	Colonia Victoria
1619	355	Campo Viera
1606	269	Villa del Rosario
1581	344	Colonia Azara
1607	223	Perugorría
1621	199	Colonia 3 de Abril
1585	347	Garuhapé
1595	355	Campo Ramón
500	204	5° Sección- Pje- Tres Bocas
1544	201	9 de Julio
845	360	9 de Julio
581	259	Aldea Valle María
498	208	Alvear
832	344	Apóstoles
606	265	Aranguren
834	348	Aristóbulo del Valle
857	353	Arroyo del Medio
624	258	Basavilbaso
1272	199	Bella Vista
1174	357	Bernardo de Irigoyen
836	351	Bonpland
598	262	Bovril
499	215	Caá Catí
1564	348	Campo Grande
1550	351	Candelaria
862	347	Capioví
866	359	Caraguatay
607	268	Cerrito
858	353	Cerro Azul
837	351	Cerro Corá
586	269	Chajarí
1457	267	Colón
850	362	Colonia Alicia Alta
1396	361	Colonia Aurora
576	267	Colonia El Carmen
618	260	Colonia La Perla
504	198	Colonia Liebig
519	207	Colonia San Antonio
599	262	Colonia San Carlos
856	345	Colonia Wanda
578	261	Colonia Yerúa
848	357	Comandante Andrés Guacurarí
1255	202	Concepción
843	363	Concepción de la Sierra
625	258	Concepción del Uruguay
579	261	Concordia
496	222	Coronel Schueizer
1552	356	Corpus
491	221	Corrientes
1563	268	Crespo
603	265	Crucecitas Séptima
493	223	Curuzú Cuatiá
582	259	Diamante
604	265	Don Cristóbal Segundo
835	348	Dos de Mayo
863	347	El Alcázar
589	270	El Cimarron
846	360	Eldorado
601	262	El Quebracho
851	362	El Soberbio
494	212	Empedrado
497	222	Esquina
1546	266	Estación Lazo
840	349	Fachinal
587	269	Federación
590	270	Federal
841	349	Garupá
619	260	General Campos
591	266	General Galarza
583	259	General Ramírez
524	214	Gobernador Ingeniero Valentín Virasoro
859	353	Gobernador Lopez
506	220	Gobernador Martinez
501	204	Goya
592	266	Gualeguay
593	255	Gualeguaychú
608	268	Hasenkamp - Zona Rural
609	268	Hernandarias
596	254	Ibicuy
584	259	Isletas
1520	215	Itá Ibaté
502	213	Itatí
1463	198	Ituzaingó
871	356	Jardín América
518	217	La Cruz
600	262	La Paz
594	255	Larroque
610	268	Las Tunas
507	220	Lavalle
1346	353	Leandro N. Alem
585	259	Libertador San Martín
495	212	Lomas de Empedrado
1232	207	Loreto
1439	351	Loreto
588	269	Los Conquistadores
1485	355	Los Helechos
622	263	Maciá
611	268	María Grande
509	216	Mburucuyá
1464	205	Mercedes
511	206	Mocoretá
867	359	Montecarlo
512	206	Monte Caseros
605	265	Nogoyá
869	355	Oberá
861	353	Olegario Victor Andrade
1541	268	Oro Verde
612	268	Paraná
513	210	Paso de los Libres
842	349	Posadas
853	345	Puerto Esperanza
870	345	Puerto Iguazú
1558	345	Puerto Libertad
868	359	Puerto Piray
864	347	Puerto Rico
503	213	Ramada Paso
623	263	Rosario del Tala
865	347	Ruiz de Montoya
514	200	Saladas
580	261	Salto Grande
1438	357	San Antonio
1470	268	San Benito
515	203	San Cosme
872	356	San Ignacio
1172	350	San Javier
1437	344	San José
617	256	San José de Feliciano
1458	258	San Justo
517	209	San Luis del Palmar
1436	354	San Pedro
795	201	San Roque
620	260	San Salvador
1284	203	Santa Ana
1435	351	Santa Ana
627	258	Santa Anita
602	262	Santa Elena
1465	220	Santa Lucía
1309	363	Santa María
875	361	Santa Rita
1462	202	Santa Rosa
1349	360	Santiago de Liniers
1137	214	Santo Tomé
1345	362	San Vicente
1553	223	Sauce
526	218	Sauce
613	268	Seguí
595	255	Urdinarrain
1308	361	Veinticinco de Mayo
614	268	Viale
628	264	Victoria
1459	267	Villa Elisa
615	268	Villa Gobernador Luis F. Etchevehere
629	257	Villaguay
630	257	Villaguay Este
597	254	Villa Paranacito
616	268	Villa Urquiza
1596	217	Yapeyú
1625	351	Mártires
1628	356	Santo Pipó
\.


--
-- TOC entry 1938 (class 0 OID 18878)
-- Dependencies: 182
-- Data for Name: tipoinstits; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipoinstits (id, jurisdiccion_id, name) FROM stdin;
549	18	Colegio Secundario y Centro de Formación Profesional
543	18	Misión Monotécnica (M.M.)
597	54	Instituto Superior del Profesorado en Ciencias Agrarias y Protección Ambiental
544	18	Colegio
550	54	Centro de Formación
592	30	Instituto Superior en Gestión de Pymes Agropecuarias
598	54	Instituto Superior Agroindustrial
504	30	Escuela de Nivel Medio y Superior de Educación Tecnológica (E.N.M.yS.E.T.)
551	54	Instituto Superior de Formación y Desarrollo Rural
166	30	Centro Comunitario de Adultos
291	54	Bachillerato con Orientación Laboral Polivalente
289	54	Bachillerato para Adultos y Común
163	30	Centro de Capacitación Laboral (Ce.C.La.)
268	54	Escuela Agrotécnica
498	54	Centro de Educación para el Trabajo
110	18	Centro de Formación Profesional (C.F.P.)
273	54	Centro de Formación Profesional (C.F.P.)
160	30	Centro de Formación Profesional (C.F.P.)
100	18	Centro de Orientación Profesional y Capacitación Obrera (C.O.P.Y.C.O.)
99	18	Centro Educativo de Nivel Secundario (C.E.N.S.)
153	30	Centro Educativo de Nivel Terciario (C.E.N.T.)
293	54	Centro Educativo Polimodal
165	30	Centro Privado de Capacitación Técnica
106	18	Colegio de Educación Técnica
282	54	Colegio Provincial
105	18	Escuela
111	18	Escuela Agrotécnica
297	54	Escuela Provincial de Instrucción y Perfeccionamiento Aeronáutico
102	18	Escuela Comercial
276	54	Escuela de Comercio
155	30	Escuela de Educación Agrotécnica (E.E.A.T.)
113	18	Escuela de Educación Técnica (E.E.T.)
167	30	Escuela de Educación Técnica (E.E.T.)
503	30	Escuela Normal Rural
516	30	Escuela Privada de Capacitación Técnica
107	18	Escuela de la Familia Agrícola (E.F.A.)
290	54	Escuela de la Familia Agrícola (E.F.A.)
158	30	Escuela Nocturna de Adultos
295	54	Escuela Normal Superior
159	30	Escuela Normal Superior
108	18	Escuela Profesional
284	54	Escuela Provincial de Educación Técnica (E.P.E.T.)
157	30	Escuela Superior de Comercio
278	54	Escuela Superior de Comercio
292	54	Instituto
168	30	Instituto de Educación Superior de Formación Docente
109	18	Instituto de Educación Superior de Formación Docente
288	54	Escuela Superior de Música
161	30	Instituto de Educación Superior del Profesorado (I.S.P.)
112	18	Instituto de Educación Superior (I.E.S.)
300	54	Instituto de Enseñanza Agropecuaria (I.E.A.)
274	54	Instituto Politécnico
298	54	Instituto Privado
271	54	Instituto Técnico Superior
164	30	Instituto Técnico Superior
275	54	Instituto Tecnológico (I.Tec.)
98	18	Misión de Cultura Rural y Doméstica
280	54	Misión Monotécnica (M.M.)
270	54	Instituto Privado de Educación Superior 
286	54	Instituto Superior 
272	54	Instituto Superior en Tecnologías Agropecuarias y Alimentarias
154	30	Instituto de Educación Superior 
156	30	Misión Monotécnica y de Extensión Cultural
578	54	Instituto de Enseñanza Agropecuaria y Electromecánica
623	54	Escuela Especial
\.


--
-- TOC entry 1939 (class 0 OID 18884)
-- Dependencies: 184
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, nombre, apellido, password, created, modified, group_id) FROM stdin;
146	romantest	Román	Mussi	406ead6b337dd9321a2eef8b067b4a4acbdac9e5	\N	2013-03-12 17:03:54	1
129	romanmussi	Román	Mussi	406ead6b337dd9321a2eef8b067b4a4acbdac9e5	\N	\N	3
\.


--
-- TOC entry 1921 (class 2606 OID 18889)
-- Dependencies: 164 164
-- Name: departamento_id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY departamentos
    ADD CONSTRAINT departamento_id PRIMARY KEY (id);


--
-- TOC entry 1933 (class 2606 OID 18913)
-- Dependencies: 186 186
-- Name: groups_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT groups_pkey PRIMARY KEY (id);


--
-- TOC entry 1923 (class 2606 OID 18891)
-- Dependencies: 169 169
-- Name: instits_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY instits
    ADD CONSTRAINT instits_pkey PRIMARY KEY (id);


--
-- TOC entry 1925 (class 2606 OID 18893)
-- Dependencies: 171 171
-- Name: jurisdicciones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY jurisdicciones
    ADD CONSTRAINT jurisdicciones_pkey PRIMARY KEY (id);


--
-- TOC entry 1927 (class 2606 OID 18895)
-- Dependencies: 173 173
-- Name: localidades_id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY localidades
    ADD CONSTRAINT localidades_id PRIMARY KEY (id);


--
-- TOC entry 1929 (class 2606 OID 18897)
-- Dependencies: 182 182
-- Name: tipoinstits_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipoinstits
    ADD CONSTRAINT tipoinstits_pkey PRIMARY KEY (id);


--
-- TOC entry 1931 (class 2606 OID 18899)
-- Dependencies: 184 184
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 1945 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2014-05-28 14:54:27

--
-- PostgreSQL database dump complete
--

