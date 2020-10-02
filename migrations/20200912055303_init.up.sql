--
-- Name: YiiSession; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public."YiiSession" (
    id character(32) NOT NULL,
    expire integer,
    data bytea
);


--
-- Name: address_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.address_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: address; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.address (
    id bigint DEFAULT nextval('public.address_id_seq'::regclass) NOT NULL,
    address_1 character varying(128) NOT NULL,
    address_2 character varying(128),
    district bigint NOT NULL,
    city bigint NOT NULL,
    state bigint NOT NULL,
    country character varying(128) NOT NULL
);


--
-- Name: authassignment; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.authassignment (
    itemname character varying(256) NOT NULL,
    userid bigint NOT NULL,
    bizrule text,
    data text
);


--
-- Name: authitem_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.authitem_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: authitem; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.authitem (
    id bigint DEFAULT nextval('public.authitem_id_seq'::regclass) NOT NULL,
    type integer NOT NULL,
    name character varying(256) NOT NULL,
    description text,
    bizrule text,
    data text
);


--
-- Name: authitemchild; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.authitemchild (
    parent character varying(256) NOT NULL,
    child character varying(256) NOT NULL
);


--
-- Name: category_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.category_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: category; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.category (
    id bigint DEFAULT nextval('public.category_id_seq'::regclass) NOT NULL,
    name character varying(256) NOT NULL,
    description text,
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: event; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.event (
    id bigint NOT NULL,
    title character varying(256) NOT NULL,
    description character varying(1024),
    start_time timestamp without time zone NOT NULL,
    end_time timestamp without time zone,
    banner_url character varying(128),
    created_at timestamp without time zone NOT NULL,
    created_by character varying(32) NOT NULL,
    updated_at timestamp without time zone,
    updated_by character varying(32)
);


--
-- Name: event_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.event_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: event_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.event_id_seq OWNED BY public.event.id;


--
-- Name: item_id_seq1; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.item_id_seq1
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: item; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.item (
    id bigint DEFAULT nextval('public.item_id_seq1'::regclass) NOT NULL,
    cat_id bigint NOT NULL,
    code character varying(16) NOT NULL,
    name character varying(128) NOT NULL,
    stock bigint NOT NULL,
    acq_price numeric(19,0),
    price numeric(19,0) NOT NULL,
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: item_category_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.item_category_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: item_category; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.item_category (
    id bigint DEFAULT nextval('public.item_category_id_seq'::regclass) NOT NULL,
    name character varying(256) NOT NULL,
    description text,
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: item_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.item_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: meta_tag_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.meta_tag_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: meta_tag; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.meta_tag (
    id bigint DEFAULT nextval('public.meta_tag_id_seq'::regclass) NOT NULL,
    name character varying(256) NOT NULL,
    timestamp_created timestamp without time zone,
    user_create character varying(32)
);


--
-- Name: news; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.news (
    id bigint NOT NULL,
    cat_id bigint NOT NULL,
    title character varying(512) NOT NULL,
    permalink character varying(128) NOT NULL,
    summary character varying(1024) NOT NULL,
    content text NOT NULL,
    tag character varying(512),
    banner character varying(256) NOT NULL,
    video_url character varying(256),
    flag_published integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    created_by character varying(32) NOT NULL,
    updated_at timestamp without time zone,
    updated_by character varying(32)
);


--
-- Name: news_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.news_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: news_id_seq1; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.news_id_seq1
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: news_id_seq1; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.news_id_seq1 OWNED BY public.news.id;


--
-- Name: order_detail_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.order_detail_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: order_detail; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.order_detail (
    id bigint DEFAULT nextval('public.order_detail_id_seq'::regclass) NOT NULL,
    order_id bigint NOT NULL,
    item_id bigint NOT NULL,
    qty bigint NOT NULL
);


--
-- Name: order_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.order_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: orders_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.orders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: orders; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.orders (
    id bigint DEFAULT nextval('public.orders_id_seq'::regclass) NOT NULL,
    order_date timestamp without time zone,
    order_number character varying(32) NOT NULL,
    unit_id bigint NOT NULL,
    status integer NOT NULL,
    delivery_date timestamp without time zone,
    delivery_provider character varying(32),
    delivery_receipt_no character varying(32),
    created_at timestamp without time zone NOT NULL,
    created_by character varying(32) NOT NULL,
    updated_at timestamp without time zone,
    updated_by character varying(32),
    cancel_reason character varying(512)
);


--
-- Name: ref_cities_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.ref_cities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: ref_cities; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.ref_cities (
    id bigint DEFAULT nextval('public.ref_cities_id_seq'::regclass) NOT NULL,
    state_id bigint NOT NULL,
    name character varying(128) NOT NULL,
    unit_code character varying(8)
);


--
-- Name: ref_delivery_provider; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.ref_delivery_provider (
    id bigint NOT NULL,
    name character varying(128) NOT NULL,
    url_tracking character varying(256) NOT NULL,
    created_at timestamp without time zone,
    created_by character varying(32),
    updated_at timestamp without time zone,
    updated_by character varying(32)
);


--
-- Name: ref_districts_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.ref_districts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: ref_districts; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.ref_districts (
    id bigint DEFAULT nextval('public.ref_districts_id_seq'::regclass) NOT NULL,
    city_id bigint NOT NULL,
    name character varying(128) NOT NULL
);


--
-- Name: ref_states_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.ref_states_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: ref_states; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.ref_states (
    id bigint DEFAULT nextval('public.ref_states_id_seq'::regclass) NOT NULL,
    name character varying(128) NOT NULL
);


--
-- Name: ref_villages_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.ref_villages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: ref_villages; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.ref_villages (
    id bigint DEFAULT nextval('public.ref_villages_id_seq'::regclass) NOT NULL,
    district_id bigint NOT NULL,
    name character varying(128) NOT NULL
);


--
-- Name: student_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.student_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: student; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.student (
    id bigint DEFAULT nextval('public.student_id_seq'::regclass) NOT NULL,
    unit_id bigint NOT NULL,
    nim character varying(16) NOT NULL,
    name character varying(256) NOT NULL,
    nick_name character varying(64) NOT NULL,
    birthplace character varying(64) NOT NULL,
    birthdate date NOT NULL,
    religion character varying(16),
    current_education character varying(32) NOT NULL,
    father character varying(128),
    mother character varying(128),
    adress_id bigint NOT NULL,
    phone character varying(16) NOT NULL,
    start_date date NOT NULL,
    stop_date date,
    is_graduated boolean NOT NULL,
    created_at timestamp without time zone,
    created_by character varying(32),
    updated_at timestamp without time zone,
    updated_by character varying(32)
);


--
-- Name: teacher; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.teacher (
    id integer NOT NULL,
    unit_id bigint NOT NULL,
    name character varying(128) NOT NULL,
    phone character varying(128),
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: teacher_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.teacher_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: teacher_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.teacher_id_seq OWNED BY public.teacher.id;


--
-- Name: unit_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.unit_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: unit; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.unit (
    id bigint DEFAULT nextval('public.unit_id_seq'::regclass) NOT NULL,
    unit_no character varying(8) NOT NULL,
    owner character varying(128) NOT NULL,
    address_id bigint,
    wa_number character varying(16) NOT NULL,
    trainer character varying(128),
    consultant character varying(128),
    status integer NOT NULL,
    start_date timestamp without time zone NOT NULL,
    expired_at timestamp without time zone NOT NULL,
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: users; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.users (
    id bigint DEFAULT nextval('public.users_id_seq'::regclass) NOT NULL,
    name character varying(256) NOT NULL,
    username character varying(32) NOT NULL,
    email character varying(128) NOT NULL,
    password character varying(256) NOT NULL,
    salt character varying(128) NOT NULL,
    status integer NOT NULL,
    flag_delete integer NOT NULL,
    login_atemp integer NOT NULL,
    last_login_attempt timestamp without time zone,
    last_login_time timestamp without time zone,
    timestamp_created timestamp without time zone NOT NULL,
    user_create character varying(32) NOT NULL,
    timestamp_updated timestamp without time zone,
    user_update character varying(32)
);


--
-- Name: event id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.event ALTER COLUMN id SET DEFAULT nextval('public.event_id_seq'::regclass);


--
-- Name: news id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.news ALTER COLUMN id SET DEFAULT nextval('public.news_id_seq1'::regclass);


--
-- Name: teacher id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.teacher ALTER COLUMN id SET DEFAULT nextval('public.teacher_id_seq'::regclass);

