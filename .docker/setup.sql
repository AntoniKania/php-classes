CREATE DATABASE IF NOT EXISTS myDB;
use myDB;

CREATE TABLE IF NOT EXISTS car(
    id int AUTO_INCREMENT NOT NULL,
    made varchar(255),
    model varchar(255),
    price double(10,2),
    production_year int,
    description varchar(255),
    PRIMARY KEY (id)
);


-- test to see if script was run
INSERT INTO car(made, model, price, production_year, description) VALUES
('BMW', 'X5', 179000.00, 2017, 'Luxurious SUV with advanced features'),
('Mercedes-Benz', 'C-Class', 135000.00, 2019, 'Elegant sedan with a powerful engine'),
('Toyota', 'Corolla', 75000.00, 2016, 'Reliable compact car for daily commuting'),
('Honda', 'CR-V', 118000.00, 2020, 'Spacious SUV with excellent fuel efficiency'),
('Ford', 'Mustang', 245000.00, 2018, 'Iconic muscle car with impressive performance'),
('Volkswagen', 'Golf', 98000.00, 2017, 'Popular hatchback known for its versatility'),
('Nissan', 'Altima', 89000.00, 2015, 'Comfortable midsize sedan with modern features'),
('Chevrolet', 'Camaro', 210000.00, 2019, 'Aggressive sports car with head-turning design'),
('Volvo', 'XC60', 176000.00, 2021, 'Safe and stylish crossover for family adventures');