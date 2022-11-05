<?php

namespace App\Models;



class Player 
{
    Private Static $players_list = [
        [
            "image" => "degea.jpg",
            "name" => "David De gea",
            "position" => "Goalkeeper",
            "nationality" => "Spain"
        ],
        [   
            "image" => "lisandro.jpg",
            "name" => "Lisandro Martinez",
            "position" => "Centre Back",
            "nationality" => "Argentina"
        ],
        [   
            "image" => "maguire.avif",
            "name" => "Harry Maguire",
            "position" => "Centre Back",
            "nationality" => "Englnad"
        ],
        [   
            "image" => "luke.webp",
            "name" => "Luke Shaw",
            "position" => "Left Back",
            "nationality" => "England"
        ],
        [   
            "image" => "dalot.jpg",
            "name" => "Diogo Dalot",
            "position" => "Right Back",
            "nationality" => "Portugal"
        ],
        [   
            "image" => "eriksen.JPG",
            "name" => "Christian Eriksen",
            "position" => "Central Midfielder",
            "nationality" => "Denmark"
        ],
        [   
            "image" => "casemiro.jpg",
            "name" => "Casemiro",
            "position" => "Defensive Midfielder",
            "nationality" => "Brazil"
        ],
        [   
            "image" => "bruno.jpg",
            "name" => "Bruno Fernandes",
            "position" => "Attacking Midfielder",
            "nationality" => "Portugal"
        ],
        [   
            "image" => "antony.jpeg",
            "name" => "Antony",
            "position" => "Right Winger",
            "nationality" => "Brazil"
        ],
        [   
            "image" => "rashford.jpg",
            "name" => "Marcus Rashford",
            "position" => "Left Wing",
            "nationality" => "England"
        ],
        [   
            "image" => "ronaldo.jpg",
            "name" => "Cristiano Ronaldo",
            "position" => "Centre Forward",
            "nationality" => "Portugal"
        ]
        ];

        public static function all(){
            return self::$players_list;
        }
}
