DROP TABLE address CASCADE;
DROP TABLE authassignment, authitemchild, category, item CASCADE;
DROP TABLE meta_tag, news, order_detail, ref_cities, ref_delivery_provider, ref_districts, ref_villages, ref_states CASCADE;
DROP TABLE authitem, orders, teacher, unit, student, users CASCADE;
DROP SEQUENCE address_id_seq, authitem_id_seq, category_id_seq, item_id_seq, meta_tag_id_seq, news_id_seq CASCADE;
DROP SEQUENCE order_detail_id_seq, order_id_seq, ref_cities_id_seq, ref_districts_id_seq, ref_states_id_seq CASCADE;
DROP SEQUENCE ref_villages_id_seq, student_id_seq, unit_id_seq, users_id_seq CASCADE;
DROP SEQUENCE item_category_id_seq, item_id_seq1, orders_id_seq;