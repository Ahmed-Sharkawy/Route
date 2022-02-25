-- Q1

SELECT DISTINCT `orderNumber` FROM `orderdetails` WHERE `productCode` LIKE 'S18%' AND `priceEach` > 100;


--Q2

SELECT * FROM `payments` WHERE `paymentDate` LIKE '%05' OR `paymentDate` LIKE '%06';


-- Q3

SELECT * FROM `customers` WHERE `country` = 'USA' AND `phone` LIKE '%5555%' ORDER BY `creditLimit` DESC LIMIT 5

