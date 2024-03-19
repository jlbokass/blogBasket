-- create product table
 create table product (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description TEXT NULL DEFAULT NULL,
    PRIMARY KEY (id)
    );

-- create a user
CREATE USER admin_blog_basket@localhost IDENTIFIED BY 'Password(2024';
-- grant privileges to admin_bolg_basket
GRANT ALL PRIVILEGES ON blog_basket.* TO admin_blog_basket@localhost;

-- insert some products
INSERT INTO product (name, description)
    VALUES('Product One', 'This is product one'),
    ('Second product', 'A second product here'),
    ('Product #3', ''),
    ('The 4th One','Some <b>HTML</b> in description');