<?php 

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Main page</title>

    <link rel="stylesheet" href="css/main.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/app.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="index.html">Overview</a></li>
                <li><a href="sizecompare.html">Comparison</a></li>
                <li><a href="gallery.html">Gallery</a></li>
              <li><a href="logout.php" class="btn">Log Out</a></li>
            </ul>
        </nav>
    </div>

    <header class="main-header">
        <div class="layers">
            <div class="layers_header">
                <div class="layers_caption">Welcome to the</div>
                <div class="layers_title">Solar System</div>
            </div>
            <div class="layer layers_base" style="background-image: url(../img/layer-base.png);"></div>
            <div class="layer layers_middle" style="background-image: url(../img/layer-middle.png);"></div>
            <div class="layer layers_front" style="background-image: url(../img/layer-front.png);"></div>
        </div>
    </header>

    <section class="sec-01">
        <div class="container-1">
            <h2 class="main-title">Solar System</h2>
            <div class="content">
                <div class="image">
                    <img src="images/sunny.png" alt="">
                </div>
                <div class="text-box">
                    <h3>The Sun</h3>
                    <p>The Sun is the star at the center of the Solar System. It is a massive, hot ball of plasma, inflated and heated by energy produced by nuclear fusion reactions at its core. Part of this internal energy is emitted from its surface as light, ultraviolet, and infrared radiation, providing most of the energy for life on Earth.</p>
                </div>
                <!-- add like icons of the planets clickable with smooth animation or smth -->
            </div>
        </div>
    </section>
    <section class="sec-02">
        <div class="container-2">
            <div class="content">
                <div class="image">
                    <img src="images/merc.png" alt="">
                </div>
                <div class="info">
                    <h3 class="info-title">Mercury</h3>
                    <p>Mercury is the first planet from the Sun and the smallest in the Solar System. It is a terrestrial planet with a heavily cratered surface due to overlapping impact events. These features are well preserved since the planet has no geological activity and an extremely tenuous atmosphere called an exosphere.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-03">
        <div class="container-3">
            <div class="content">
                <div class="image">
                    <img src="images/ven.png" alt="">
                </div>
                <div class="info2">
                    <h3 class="info-title2">Venus</h3>
                    <p>Venus is the second planet from the Sun. It is a rocky planet with the densest atmosphere of all the rocky bodies in the Solar System, and the only one with a mass and size that is close to that of its orbital neighbour Earth. Orbiting inferiorly (inside of Earth's orbit), it appears in Earth's sky always close to the Sun, as either a "morning star" or an "evening star".</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-04">
        <div class="container-4">
            <div class="content">
                <div class="image">
                    <img src="images/earthx.png" alt="">
                </div>
                <div class="info3">
                    <h3 class="info-title3">Earth</h3>
                    <p>Earth is the third planet from the Sun and the only astronomical object known to harbor life. This is enabled by Earth being a water world, the only one in the Solar System sustaining liquid surface water. Earth has a liquid outer core that generates a magnetosphere capable of deflecting most of the destructive solar winds and cosmic radiation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-05">
        <div class="container-5">
            <div class="content">
                <div class="image">
                    <img src="images/moonx.png" alt="">
                </div>
                <div class="info4">
                    <h3 class="info-title4">Moon</h3>
                    <p>The Moon is Earth's only natural satellite. It orbits at an average distance of 384400 km (238900 mi), about 30 times the planet's diameter. The Moon always presents the same side to Earth, because gravitational pull has locked its rotation to the planet. This results in the lunar day of 29.5 days matching the lunar month. The Moon's gravitational pull – and to a lesser extent the Sun's – are the main drivers of the tides.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-06">
        <div class="container-6">
            <div class="content">
                <div class="image">
                    <img src="images/jupiterx.png" alt="">
                </div>
                <div class="info5">
                    <h3 class="info-title5">Jupiter</h3>
                    <p>Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a gas giant with a mass more than two and a half times that of all the other planets in the Solar System combined, and slightly less than one one-thousandth the mass of the Sun. Jupiter orbits the Sun at a distance of 5.20 AU (778.5 Gm) with an orbital period of 11.86 years. Jupiter is the third brightest natural object in the Earth's night sky after the Moon and Venus, and it has been observed since prehistoric times. It was named after Jupiter, the chief deity of ancient Roman religion.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-07">
        <div class="container-7">
            <div class="content">
                <div class="image">
                    <img src="images/saturnx.png" alt="">
                </div>
                <div class="info6">
                    <h3 class="info-title6">Saturn</h3>
                    <p>Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius of about nine-and-a-half times that of Earth. The planet has a prominent ring system, which is composed mainly of ice particles, with a smaller amount of rocky debris and dust. At least 146 moons are known to orbit the planet, of which 63 are officially named;</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-08">
        <div class="container-8">
            <div class="content">
                <div class="image">
                    <img src="images/uranusx.png" alt="">
                </div>
                <div class="info7">
                    <h3 class="info-title7">Uranus</h3>
                    <p>Uranus is the seventh planet from the Sun. It is a gaseous cyan-coloured ice giant. Most of the planet is made of water, ammonia, and methane in a supercritical phase of matter, which in astronomy is called 'ice' or volatiles. The planet's atmosphere has a complex layered cloud structure and has the lowest minimum temperature of 49 K (−224 °C; −371 °F) out of all the Solar System's planets. It has a marked axial tilt of 97.8° with a retrograde rotation rate of 17 hours. This means that in an 84-Earth-year orbital period around the Sun, its poles get around 42 years of continuous sunlight, followed by 42 years of continuous darkness.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-09">
        <div class="container-9">
            <div class="content">
                <div class="image">
                    <img src="images/neptunex.png" alt="">
                </div>
                <div class="info8">
                    <h3 class="info-title8">Neptune</h3>
                    <p>Neptune is the eighth and farthest planet from the Sun. It is the fourth-largest planet in the Solar System by diameter, the third-most-massive planet, and the densest giant planet. Being composed primarily of gases and liquids, it has no well-defined solid surface. The planet orbits the Sun once every 164.8 years at an orbital distance of 30.1 astronomical units (4.5 billion kilometres; 2.8 billion miles). It is named after the Roman god of the sea and has the astronomical symbol ♆, representing Neptune's trident.</p>
                </div>
            </div>
        </div>
    </section>

    <article class="main-article" style="background-image: url(/img/dungeon.jpg);">
        
        <div class="sun">
        </div>

        <div class="mercury-outline">
            <div class="mercury">
                <h3 class="fg">Mercury</h3>

            </div>
        </div>

        <div class="venus-outline-1">
            <div class="venus">
                <h3 class="fg">Venus</h3>
            </div>
        </div>

        <div class="earth-outline-1">
            <div class="earth">
                <div class="earth-circle">
                    <div class="earth-inner">
                        <h3 class="fg">Moon</h3>
                    </div>
                </div>
                <h3 class="fg">Earth</h3>
            </div>
        </div>

        <div class="mars-outline-1">
            <div class="mars">
                <h3 class="fg">Mars</h3>
            </div>
        </div>

        <div class="jupiter-outline-1">
            <div class="jupiter">
                <h3 class="fg">Jupiter</h3>
            </div>
        </div>

        <div class="saturn-outline-1">
            
            <div class="saturn">
                <h3 class="fg">Saturn</h3>
                
            </div>
        </div>

        <div class="uranus-outline-1">
            
            <div class="uranus">
                <h3 class="fg">Uranus</h3>
                
            </div>
        </div>

        <div class="neptune-outline-1">
            
            <div class="neptune">
                <h3 class="fg">Neptune</h3>
                
            </div>
    </div>
        <div class="copy">© Nurtay Nursultan</div>
    
</body>
</html>