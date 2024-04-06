<?php

namespace App\Providers\Faker;

use Faker\Provider\Base;

class CustomDataProvider extends Base
{
    protected static $randomFirstName = [
        // Men's names
        'Jameie', 'John', 'Rob', 'Michael', 'William', 'David', 'Richard', 'Joseph', 'Thomas', 'Tom', 'Rick', 'Charlie', 'Charles',
        'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Donald', 'Mark', 'Paul', 'Steven', 'Andrew', 'Kenneth', 'Ken', 'Alex',
        'Joshua', 'George', 'Kevin', 'Brian', 'Edward', 'Ronald', 'Timothy', 'Jason', 'Jeffrey', 'Ryan',
        'Jacob', 'Gary', 'Nicholas', 'Eric', 'Steve', 'Jonathan', 'Larry', 'Justin', 'Scott', 'Brandon',
        'Frank', 'Benjamin', 'Gregory', 'Mike', 'Markus', 'Jon', 'Adam', 'Samuel', 'Raymond', 'Patrick', 'Alexander', 'Jack', 'Dennis', 'Jerry',

        // Women's names
        'Mary', 'Jennifer', 'Linda', 'Patricia', 'Elizabeth', 'Susan', 'Jessica', 'Sarah', 'Karen', 'Nancy',
        'Margaret', 'Lisa', 'Betty', 'Dorothy', 'Sandra', 'Ashley', 'Kimberly', 'Donna', 'Emily', 'Michelle',
        'Carol', 'Amanda', 'Melissa', 'Deborah', 'Stephanie', 'Rebecca', 'Laura', 'Sharon', 'Cynthia', 'Kathleen', 'Cathy',
        'Amy', 'Shirley', 'Angela', 'Helen', 'Anna', 'Brenda', 'Pamela', 'Nicole', 'Ruth', 'Katherine',
        'Samantha', 'Christine', 'Emma', 'Catherine', 'Debra', 'Virginia', 'Rachel', 'Carolyn', 'Janet', 'Maria',

        // Senfield
        'Elaine', 'Jerry', 'George', 'Kramer', 'Newman', 'Morty', 'Helen', 'Frank', 'Estelle', 'Susan', 'David', 'Mickey', 'Puddy', 'Tim', 'Lloyd', 'Jackie', 'J. Peterman', 'Kenny', 'Uncle Leo', 'Babu',
    ];

    protected static $randomLastName = [
        'Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller', 'Davis', 'Garcia', 'Rodriguez', 'Wilson',
        'Martinez', 'Anderson', 'Taylor', 'Thomas', 'Hernandez', 'Moore', 'Martin', 'Jackson', 'Thompson', 'White',
        'Lopez', 'Lee', 'Gonzalez', 'Harris', 'Clark', 'Lewis', 'Robinson', 'Walker', 'Perez', 'Hall',
        'Young', 'Allen', 'Sanchez', 'Wright', 'King', 'Scott', 'Green', 'Baker', 'Adams', 'Nelson',
        'Hill', 'Ramirez', 'Campbell', 'Mitchell', 'Roberts', 'Carter', 'Phillips', 'Evans', 'Turner', 'Torres'
    ];

    public function avRandomFirstName()
    {
        return static::$randomFirstName[array_rand(static::$randomFirstName)];
    }

    public function avLastName()
    {
        return static::$randomLastName[array_rand(static::$randomLastName)];
    }
}
