@extends('layouts.page.default')
@section('content')


    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/destinations/puno.jpg')}}" alt="" id="hero-vid">
{{--            @include('layouts.page.menu-custom')--}}
        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">
                    <div class="col">
                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            Peru Destinations
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#content-page" class="text-white">
                                    <i data-feather="chevron-down" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img data-src="{{asset('images/destinations/puno.jpg')}}" data-srcset="{{asset('images/destinations/puno.jpg')}}" alt="puno" class="img-fluid lazy has-webp">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col small font-weight-bold">
                    {{ Breadcrumbs::render('destinations') }}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col">
                    <h1 class="font-weight-bold text-g-yellow text-center">PERU <span class="text-g-green">DESTINATIONS</span></h1>
                    {{--<h1 class="text-secondary h4"><strong>SOUTH AMERICA TRAVEL DESTINATIONS</strong></h1>--}}
                    <p class="lead text-center">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
                    <div class="alert alert-primary text-center m-0" role="alert">
                        <h4>We will work around your schedule and your travel interests to build together the most unique travel plans</h4>
                    </div>
                    {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                    {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                    {{--<p class="h4 font-weight-light">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>Customized Travel Packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>Machu Picchu</strong> and the rest of our  homeland… Peru!</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row pt-4" id="destinations">
                        <div class="col-12">
                            <h4 class="text-secondary"><strong>Destinations</strong></h4>
                            <div class="row">
                                @foreach($destinos->sortBy('nombre') as  $destino)
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="grid-category position-relative shadow-sm">
                                        <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ', '-', strtolower($destino->nombre))])}}-tours" class="text-g-dark rounded">
                                            <img data-src="{{asset('images/destinations/destinations/'.str_replace(' ', '-', strtolower($destino->nombre)).'.jpg')}}" data-srcset="{{asset('images/destinations/destinations/'.str_replace(' ', '-', strtolower($destino->nombre)).'.jpg')}}" alt="Machu Picchu" class="w-100 rounded lazy has-webp">
                                            <div class="grid-box p-3 text-center">
                                                <span class="no-margin text-20"><i>{{substr(ucfirst(strtolower($destino->nombre)), 0, strlen($destino->nombre)/2)}}</i><b>{{substr(ucfirst(strtolower($destino->nombre)), strlen($destino->nombre)/2, strlen($destino->nombre))}}</b></span>
                                                <div class="line"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="row pt-4" id="history">
                        <div class="col-12">
                            <h4 class="text-secondary"><strong>History</strong></h4>
                            <p>Beyond the sculpted stone walls of Machu Picchu, the astounding earthen temples of the Moche culture and the sacred pyramids of Caral, Peru's legacy is a long history of developing civilizations that began on the frigid high Andean plateaus more than ten millennia ago.</p>
                            <p>The people who built the lost city of the Incas; the same ones who designed the most intricate roads and designed the most incredible hydraulic and agricultural engineering works, started out from cold caves at an altitude of more than four thousand meters. These hunter-gathers were the first inhabitants of our country and have left countless traces of their way of life at sites such as Pikimachay (Ayacucho), Lauricocha (Huánuco) and Toquepala (Tacna), where researchers have unraveled the mystery of the birth of Peruvian civilization.</p>
                            <p>These first inhabitants left their caves and shelters around seven thousand years ago to descend to the western Pacific valleys, and from there crossed the coastal hills and finally reached the sea. The llama and deer hunters quickly became fishermen and shellfish collectors and then began domesticating plants in the warm valleys that cut through the desert. Men such as the man from Nanchoc bear witness to this dramatic juncture for Peruvians, when they began to cultivate their first crops such as lima beans, corn, potatoes and cotton, allowing them to leave their nomadic life behind and settle in their first hamlets.</p>

                            <h5>a. Ancient civilizations</h5>
                            <p>Caral, now considered the oldest civilization in America, appeared over more than five thousand years ago in the Supe River Valley, north of the city of Lima. A contemporary of Egypt and Mesopotamia, this coastal dominion completely changed the course of Peru's history more than a decade ago and solidified our country as one of the world's most important cultural hubs, along with Mesoamerica, and the basins of the Nile, Euphrates and Indus.</p>
                            <p>Caral is the culmination of an early cultural process called the Initial Period, whose main features are the absence of pottery (Preceramic) and the construction of tiered adobe temples, circular town squares and small villages around sacred and government centers. Notable archaeological sites such as Sechín, on the Áncash coast, and the Temple of the Crossed Hands of Kotosh, in Huánuco, belong to this period.</p>
                            <p>About a thousand years later, Chavín emerged in the north-central Andes, in the state of Áncash. This new government spread its culture throughout a large portion of the country, as can be seen in the "Chavinoid" images and symbols at sites as far away as the southern coast and the Altiplano. Its main religious center was located in the Waqueqsa river valley, in the beautiful region of Conchucos, and is one of the country's greatest archaeological discoveries. Before Caral was discovered, Chavín was believed to be the first great Peruvian civilization.</p>
                            <p>Around 700 B.C., another fascinating culture appeared on the coast, the first great desert people: the Paracas, who were adept weavers – their great tapestries of intricate designs are known around the world. They are known for their burial methods and for having performed successful skull operations, as is demonstrated by evidence discovered by Julio C. Tello in the 1940s.</p>
                            <p>During the first centuries AD, and following the dominance of Chavín, various dominions appeared throughout the territory, including the Mochica, whose rule encompassed almost the entire northern coast of Peru. With its center in the Moche valley, at La Libertad, these people are known for their ceramic figurines, their delicate goldsmithing and their efficient use of water resources that allowed them to significantly expand their agricultural frontier and support a large population.</p>
                            <p>What has been called the first regional empire appeared after this initial regional development; that of the Wari, around 550 AD. As a continuation of the Tiahuanaco culture, forged on the Peruvian and Bolivian Altiplano, the Wari ruled an extensive territory and established what would later become Tahuantinsuyo. It was this people that began tracing the great Pre-Hispanic roads and laying the foundations of the social and territorial governance that the Incas of Cusco would then inherit.</p>
                            <p>The disappearance of the Wari, around 1200 AD, saw the beginning of the Late Intermediate period, a second wave of regional developments where several cultures, such as Ichma, holders of the powerful oracle of Pachacamac, stand out; the Chincha, great merchants of the sea who later became 'trading partners' of the Incas; and especially the Chimú, the great lords of the north, who took the place of the Mochica and the Lambayeque. Like their predecessors, the Chimú are noted for their exquisite pottery and complex irrigation systems. They were the ones who built the immense city of Chan Chan, the largest adobe construction in the world.</p>
                            <p>This was also the era of the Chachopyas, the 'men of the clouds,' lords of the lush cloud forests of Amazonas, where they built the most incredible cities and mausoleums, carved into the steepest cliff faces.</p>
                            <p>As these cultures approached their zenith, a dominion of Quechua origin began to take shape in the valley of the Vilcanota River, in Cusco. They gained land using alliances and systems of reciprocity, in addition to force. After defeating the Chancas of Apurímac and Ayacucho, the Incas – as history tells it – built the largest empire in America. It covered the territory of six modern-day countries and united peoples from the most dissimilar backgrounds under one flag, thanks to strict social control and an efficient system of governance.</p>
                            <p>Between the 12th and 15th centuries the Incas created what no one had ever imagined before: a great state connected by an efficient road network – the Qhapac Ñan – which summarized millennia of wisdom. Rather than devastating the cultures they conquered, the Incas assimilated the ways of life of their subjects and used the best aspects of each society to build their amazing culture.</p>

                            <h5>b. The arrival of the Spanish</h5>
                            <p>The Inca culture confronted Hispanic culture with the arrival of the Spanish conquistadors in the 16th century. In 1532, the forces of Francisco Pizarro captured the Inca Atahualpa in Cajamarca, an event that marked the decline of the Inca Empire. In 1542 the Viceroyalty of Peru was created, which depended on the Spanish crown. The territory of the Viceroyalty comprised a large part of South America and remained under diverse forms of control by its authorities for almost 200 years.</p>
                            <p>The viceroyalty was consolidated in the sixteenth century with the viceroy Francisco de Toledo, who established the basis of the colonial economy: a system for the control of indigenous labor (mita) for mining and craft production. The exploitation of mining wealth affected the colonized Peruvian Indians who saw their rights restricted and their culture oppressed.</p>
                            <p>The reforms of the eighteenth century created great disagreement between many social sectors and successive rebellions broke out. The most important indigenous uprising was led by Tupac Amaru II, who was responsible for the start of the Creole movement that made Latin America independent in the 19th century.</p>

                            <h5>c. Independence</h5>
                            <p>In 1821, Peru was declared an independent country by Don Jose de San Martin and in 1824 Simón Bolívar culminated the liberation process with the wars of independence. As a republic in the process of formation, Peru had to face economic crises and military caudillismos during its first years, which made it difficult to establish a new national spirit between Indians and mestizos.</p>
                            <p>In economic terms, guano, cotton and sugar all experienced a boom. Negro slavery ended in the mid-nineteenth century. The first waves of Chinese migrants, who arrived to work in agriculture, began at the same time. Civil governments appeared later with Manuel Pardo.</p>
                            <p>By then, the guano boom, the product which had given the country its main income, had ended and the national economy entered a crisis situation. Around 1879 the country faced a war with Chile in which it was defeated. Amidst the bankruptcy, a new heyday of military governments ensued and the civilians returned. Thus began a period called the "Aristocratic Republic," which was based on an economy dominated by the landed elite.</p>
                            <p>This saw the beginning of the rubber production boom in the jungle and the gap widened further between an elite, mostly from the capital, and the rest of the population in the interior of the country, who mainly lived off agriculture.</p>
                            <p>During the 1970s, Peru was ruled by a military dictatorship led by General Juan Velasco. The military government nationalized oil, the media and reformed the agricultural foundations, whereby ownership of agricultural land changed radically. Democratic governments returned in the 1980s, but the country was plunged into a severe economic crisis with severe hyperinflation.</p>
                            <p>At the same time, the emergence of two terrorist movements took on greater importance, violently shaking the country for twenty years. In the 1990s, Alberto Fujimori, after a self-coup in 1992, established a series of laws that initiated the end of these terrorist groups. The country rejoined the world economic system, from which it had retired in the previous decade due to its decision not to pay its external debt.</p>
                            <p>Since 2000, Peru has had successive, clearly democratic governments, with Alejandro Toledo, Alan Garcia, Ollanta Humala Tasso, Pedro Pablo Kuczynski and Martín Vizcarra Cornejo. The country is in the middle of a period of economic development, with growth rates never previously achieved and overcoming the crises of the past decades.</p>


                        </div>
                    </div>

                    <div class="row pt-4" id="culture">
                        <div class="col-12">
                            <h4 class="text-secondary"><strong>Peruvian Culture</strong></h4>
                            <p>With more than 10,000 years of history, Peru boasts a great wealth of cultures and traditions. It has delicious, acclaimed gastronomy, possesses imposing archaeological complexes, 12 Unesco world heritage sites and has vast natural reserves. It is undoubtedly one of the most varied countries in the world.</p>
                            <p>Peru is located in the western part of South America. Its territory borders Ecuador, Colombia, Brazil, Bolivia and Chile. It covers 1,285,215 km2 of land and 200 nautical miles of the Pacific Ocean, as well as 60 million hectares in Antarctica. It has an estimated population of over 31.5 million inhabitants.</p>
                            <p>It is the third largest country in South America and one of the 20 largest in the world - its surface area covers more than the territories of Spain and France combined. Being a consultative party to the Antarctic Treaty, it has a scientific station called 'Machu Picchu' on this continent.</p>
                            <p>The country is divided into 25 regions or departments, including the constitutional province of El Callao, where Peru’s main port is located. The capital is Lima, a city founded in the year 1535 by the Spanish, and becoming the capital of the Viceroyalty of Peru. After independence in 1821, it became the capital of the republic.</p>
                            <p>Peru is a highly diverse country. It has 11 ecoregions and 84 of the 117 life zones that exist in the world. It has an enormous range of landscapes due to its geographical conditions, which in turn give it a great diversity of natural resources. Three main regions can be identified in its territory, which is the traditional way of dividing it according to altitudes: Coast, Mountains and Jungle.</p>
                            <p>The Jungle occupies 59% of the territory of this country, where 12% of the country’s population is concentrated. The Mountains, dominated by the Andes mountain range, occupy 30% of the territory and are home to 36% of the population. Most of the population – 52% – is concentrated on the coast, despite only occupying 11% of the national territory.</p>
                            <p>Spanish is the official language of Peru and is spoken by 84% of the population. In addition, 47 native languages are spoken in the country, including Quechua and Aymara, spoken by 13% and 1.7% of the population, respectively.</p>
                            <p>In July 2016, a new government took charge, headed by the president Pedro Pablo Kuczynski from the party Peruvians for Change. This was the fourth democratically elected government after the transitional government of 2000, which announced general elections for the following year, showing the political stability of this country.</p>

                            <h5>Language</h5>
                            <p>The great culture of ancient Peru is also expressed by a legacy of a wide variety of native languages that co-exist in its territory. Spanish is the official language and is used in most of the country. Other languages have been recognized by the Constitution, such as Quechua, which is spoken in many Andean regions in different varieties, and Aimara, the predominant language of the southern Andes.</p>
                            <p>Shipibo, Ashaninka and Aguaruna, used by Amazon communities, are just some of the country's 43 native languages.</p>

                            <h5>Religion</h5>
                            <p>Freedom of religion is a fundamental right in Peru’s culture, although Catholicism is the main religion, another legacy of the Spanish. Religious festivals have strong Spanish influence, but they are also an example of how different beliefs and religions of Peru's pre-Hispanic cultures coexist.</p>

                            <h5>Customs</h5>
                            <p>Festivals: The coming together of different creeds, customs and experiences have created close to 3,000 annual popular festivals in Peru, including patron saint feasts, processions, carnivals and rituals, encompassing the expression of belief in God, respect for nature and the celebration of freedom. Peruvian festivals have a mystical side to them; most of them are the result of a fusion between Catholicism and pre-Hispanic religious traditions. Repaying the earth is part of the main celebrations in all regions, and is about rewarding and recognizing the Pachamama (Mother Earth) for her endless generosity.</p>


                            <h5>Gastronomy:</h5>
                            <p>Peruvian cuisine is another expression of a national identity that embraces multiple cultures co-existing in one territory; a unifying element in Peru that can be seen everywhere.</p>
                            <p>Peruvians have become experts at experimenting with new flavors, harmonizing aromas and discovering new ways of cooking. The diversity of Peru's agricultural production, microclimates, geography, multiple cultures and the genius of its chefs have enriched the culinary nature of Peru to the point where it is now recognized as one of the finest expressions of the global cuisine.</p>
                            <p>Mistura is the main gastronomic fair in Peru. It is held every year in Lima, bringing together the leading chefs and restaurants of Peru. The fair has been named the Gastronomic Capital of America and is one of the main events on international tourism itineraries in the region.</p>

                            <h5>Handicrafts:</h5>
                            <p>Ancient Peruvians were outstanding handicraft artisans with highly developed technical skills. Pre-Hispanic Peruvian art has been dated back to ancient times through the discovery of weaving, gourds, wood, stone, gold, silver, pottery and even mud, which were used for day-to-day living. This ancestral heritage is still seen today in the coastal, mountain and jungle towns, in a variety of high-quality woven items. Silver filigree, carved gourds, Ayacuchan altars, Huamanga stone and wood carvings, Chulucanas pottery and Monsefú ponchos, among others, are highly valued around the world.</p>

                            <h5>Music and Dances:</h5>
                            <p>Since pre-Hispanic times, music and dance has always played an important role in Peruvian society. Ancient Peruvians used sea shells, reeds and even animal bones to produce sounds. It is said that the Peruvians of the Nazca culture were the most important pre-Hispanic musicians on the continent. Panpipes or zampoñas, terracotta trumpets and pututos were some of the most important musical instruments in ancient Peru. The music explored themes of religion, war and profanity.</p>
                            <p>Another result of its many cultures, Peru today has a rich and varied folklore and a wide diversity of both music and dancing, that combine indigenous genres and spirit with Hispanic influence, as well as modern styles that have adapted to the changes and tastes of society's larger social groups.</p>

                            <h5>Idiosyncrasy</h5>
                            <p>Peruvians are increasingly proud of the historical and cultural wealth, both past and present. After turning its back on its Andean origins for centuries, modern Peru now fully recognizes the value of the Andes and the Amazon for all that they represent in terms of resources and ancient traditions.</p>
                            <p>Peru's civilization is the oldest in South America. Neighboring countries have been created from ancient Peruvian territory and empire. Peru was the political and productive center of the region with a privileged and special geographical location.</p>
                            <p>Modern Peru boasts entrepreneurs who have rediscovered their capacity to create new wealth, businesses and services. The country has overcome difficult political and economic crises. Although Peru is still undergoing the consolidation of its institutions, the country has now seen over two decades of democracy.</p>
                            <p>Peruvians are a welcoming people who take pride in offering incredible services and experiences to visitors that include traditional foods, celebrations and festivals. Peruvians are passionate about soccer, the national sport and a good excuse for family and friends to come together.</p>
                            <p>Peruvians are very religious. The Catholic faith has an important place in peoples lives, coexisting peacefully with other creeds.</p>

                        </div>
                    </div>

                </div>
                <div class="col-3 d-none d-sm-block mt-2">
                    <div class="sticky-top sticky-top-50 mt-5">
                        <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                            <nav class="nav nav-pills flex-column w-100">
                                <a class="nav-link active" href="#destinations">Destinations</a>
                                {{--<a class="nav-link" href="#location">Location</a>--}}
                                <a class="nav-link" href="#history">History</a>
                                <a class="nav-link" href="#culture">Culture</a>
                                {{--<a class="nav-link" href="#hotels">Hotels</a>--}}
                                {{--<a class="nav-link" href="#current-weather">Current Weather</a>--}}
                                {{--<a class="nav-link" href="#photos">Photos</a>--}}
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="bg-white py-5">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 col-lg-6 mb-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col d-none d-sm-block">--}}
                            {{--<img src="{{asset('images/maps/peru.jpg')}}" alt="peru" class="w-100 rounded rounded-circle">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<h2 class="h2 font-weight-bold"><a href="{{route('destinations_country_path', 'peru-travel')}}" class="text-secondary">Peru Destinations</a></h2>--}}
                            {{--<p class="text-justify">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-lg-6 mb-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col d-none d-sm-block">--}}
                            {{--<img src="{{asset('images/maps/ecuador.jpg')}}" alt="ecuador" class="w-100 rounded rounded-circle">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<h2 class="h2 font-weight-bold"><a href="{{route('destinations_country_path', 'ecuador-travel')}}" class="text-secondary">Ecuador Destinations</a></h2>--}}
                            {{--<p class="text-justify">This amazing country is one of the most bio-diverse countries in the world, its many destinations offer visitors a range of unique beautiful landscapes to explore from the Amazon, Andes, Coast warm beaches and the world famous Galapagos Islands ecological wonder; plus rich history and Culture specially at Colonial Quito City.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-lg-6 mb-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col d-none d-sm-block">--}}
                            {{--<img src="{{asset('images/maps/bolivia.jpg')}}" alt="bolivia" class="w-100 rounded rounded-circle">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<h2 class="h2 font-weight-bold"><a href="{{route('destinations_country_path', 'bolivia-travel')}}" class="text-secondary">Bolivia Destinations</a></h2>--}}
                            {{--<p class="text-justify">Bolivia is s country very diverse , stretching from the majestic icebound peaks and bleak high-altitude deserts of the Andes mountains to the virgin rainforests and vast great savannahs of the Amazon , including the lake titicaca side that include the Tiawanaku templo also stark otherworldly salt pans for instance Uyuni, and ancient Inca trails.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-lg-6 mb-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col d-none d-sm-block">--}}
                            {{--<img src="{{asset('images/maps/brasil.jpg')}}" alt="brasil" class="w-100 rounded rounded-circle">--}}
                        {{--</div>--}}
                        {{--<div class="col">--}}
                            {{--<h2 class="h2 font-weight-bold"><a href="{{route('destinations_country_path', 'brasil-travel')}}" class="text-secondary">Brasil Destinations</a></h2>--}}
                            {{--<p class="text-justify">At GOTOPERU we give you the opportunity to choose between Prebuilt travel programs showed below or if you would rather plan your own itinerary we’ll help you build step by step your dream vacation at the best Prices cutting the "middleman" fees companies.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="bg-white">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}

                    {{--<div class="col-md-4 col-sm-6">--}}
                        {{--<div class="grid-category position-relative">--}}
                            {{--<a href="http://machupicchu.company/destinations/amazon" class="color-goto-grey">--}}
                                {{--<img src="http://machupicchu.company/images/destinations/amazon.jpg" alt="" class="w-100"/>--}}
                                {{--<div class="grid-box  text-center">--}}

                                    {{--<span class="no-margin text-20"><i>Ama</i><b>zon</b></span>--}}
                                    {{--<div class="line"></div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <section class="bg-white d-none">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-secondary h4"><strong>PERU TRAVEL USEFUL INFORMATION</strong></h1>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-5 d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="cusco">
                        <h3 class="text-g-yellow pt-5">Cusco</h3>
                        <img src="{{asset('images/guia/cusco.webp')}}" alt="" class="img-fluid rounded">
                    </div>

                    <div id="intro">
                        <h3 class="text-g-yellow pt-5">Intro</h3>
                        <div class="row">
                            <div class="col">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <td><b>Elevation: </b></td>
                                        <td>3,400 meters (11,200 feet)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Time Zone: </b></td>
                                        <td>UTC-5:00</td>
                                    </tr>
                                    <tr>
                                        <td><b>Population: </b></td>
                                        <td>413,000 (Cusco City)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Currency: </b></td>
                                        <td>Peruvian Nuevo Sol</td>
                                    </tr>
                                    <tr>
                                        <td><b>Dry season: </b></td>
                                        <td>May through October (peak travel season)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Wet season: </b></td>
                                        <td>November through March (low travel season after January)</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <h4>Cusco</h4>
                                <p>Enter the whimsical and mystical world of paradox .Cusco happens to be UNESCO World Heritage Site. This city offers an evidence of preexisting colonial architecture and a rich yet complex history. It is the capital city of the Inca empire and a hub for tourists of all kinds ( from adventurous backpackers to the luxury loving tourists) from around the world. The stone streets of Cusco are epitomised by the Qoriacancha Palace and the mesmerising church of Santo Domingo skirting the Plaza de Armas. Here a meretricious statue of the Inca Pachacutec welcomes all the tourists and two baroque cathedrals oversee magnanimously over the busy square. You are bound to discover some incredible textiles, frolicsome summer carnivals and archaeological marvels during your visit to this high-altitude, ethnically diversified city of Amerindian and mestizo culturati. Cusco is a riddle of contrast between the prehistoric autochthonous styles and the latest modern world. Plunge back into the cosmic expanse of ancient Andean culture blended with radiance of Spanish enchantment. Traverse in local buses, wander through the local streets on foot or raft in the wild rivers.</p>
                            </div>
                        </div>
                    </div>

                    <div id="main-attractions">
                        <h3 class="text-g-yellow pt-5">Main Attractions</h3>
                        <h4>Sights and Attractions</h4>
                        <h5>Quick Reference</h5>
                        <ul>
                            <li>Where: Approximately three to seven miles away from Cusco City.</li>
                            <li>Altitude: 12,000 feet above sea level.</li>
                            <li>How to Get Here: Bus and car accessible. Walking tours available in between sites.</li>
                            <li>Entrance Fee: Included in Cusco City’s Boleto Turístico.</li>
                            <li>What to Bring: Comfortable shoes, sunglasses, sunscreen, hat, water, poncho (during rainy season).</li>
                            <li>Handicap Accessible: No.</li>
                        </ul>
                        <p>As you might imagine, the Cusco region is a wonder and wealth of historical and archeological attractions. </p>
                        <p>Though there are many and varied things to see, there are a few ruins that are especially poignant examples of the culture and civilizations that came before. Among these are Qengo, Pucapucara, and Tambomachay. </p>
                        <p>Admission to all of them is included in the Boleto Turistico and they are often combined with tours of Sacsayhuaman.</p>

                        <h5>Qorikancha – The Andean Temple of the Sun</h5>
                        <p>The Temple of the Sun has been known by various names, including Qurikancha, Koricancha, and Coricancha, throughout its history. Temples within Cusco vary from humble to magnificent and Qorikancha was destined to be the most majestic of them all. What remains can be found at the intersection of Calle Santo Domingo and Avenida Sol within the city’s historic center.</p>
                        <p>Astronomy is just one of the myriad of Inca talents and evidence can be found in the observatories they raised. Huacas, or sacred places such as caves, mountains, and rivers that were located directly on ceques (transcendental lines) were believed to be connections between the heavens and the earth.</p>
                        <p>Qorikancha was built to honor Inti, the sun god, and its location is not accidental. The Inca pinpointed the spot where ceques converged and raised the temple on a hill between the rivers of Shapy-Huatanay and Tullumayo. For those that may wonder at this specific location, a visit during the Andean New Year of Inti Raymai provides the answer. During the solstice, sunlight streams through its windows due to its specific alignment with astronomic entities.</p>
                        <p>The wonder of Inca architectural ability is never clearer than when one looks closely at examples such as Qorikancha. Its walls are shaped and fitted from stones that were relocated from quarries as far away as the towns of Waqoto and Rumicolca (20-30 kilometers/12-18 miles) and all of it was done without the use of mortar.</p>
                        <p>Construction techniques include irregular stone shapes with rounded edges and slightly inclined trapezoidal walls. Why use such methods? Inca designs are known for their ability to withstand seismic movements and these mortar-free structures allow the stones to vibrate in place during seismic activities. Once the event is over, they settle back into position and keep the building a solidly in place as it was before.</p>

                        <h5>Church of Santo Domingo</h5>
                        <p>The Church of Santo Domingo marks a convergence of Western and Andean. Following the Spanish invasion, the land upon which it was built was given to Juan Pizarro, Francisco Pizarro’s younger brother, who then willed it to the Dominican Order. They retain ownership to this day.</p>
                        <p>The stonework of Qorikancha was dismantled and used in the building of the Santo Domingo Church. Given the information about Inca structures, it should be no surprise to learn that earthquakes that had leveled other Spanish construction did nearly no damage to Inca walls. Only man’s interference could undo such architectural marvels.</p>
                        <p>Baroque carvings and vaulted ceilings exhibits Santo Domingo’s grandeur and the wooden door of the church boasts the only place in Cusco where Moorish style carvings can be found. Within the Spanish walkway edged internal garden a pre-Columbian single stone fountain still stands.</p>
                        <p>The 1950 major earthquake in Cusco exposed original Inca walls beneath layers of old plaster and efforts are now underway to preserve both historical legacies of this religious structure. It is, and ever will be, a captivating example of the merging of Inca and Spanish architecture.</p>

                        <h5>Sacsayhuaman</h5>
                        <p>On a hill high above Cusco city, the Inca built terraces using massive stones weighing hundreds of tons. These were cut and polished to form what was once a truly awe inspiring architectural delight. Only a small portion remains but even that captures the imagination at the skill and scale of the Inca builders. It has survived centuries of history and the passing of one culture into another and still it stands proudly.</p>
                        <p>Sacsayhuaman covers about 12 square miles, sits at an altitude of over 12,000 feet above sea level and was used to keep watch for external attacks on the city. Its size and grandeur also serve well as a place to hold rituals and other functions. Today, Cusco’s Inti Raymi festival is held there.</p>
                        <p>Though only a small percentage of the original buildings and structures remain, there is plenty to see that speaks to the history and detail of this massive site. The site’s primary defensive feature, baluartes, are comprised of staggered walls that had been built using the enormous stones mentioned earlier.</p>
                        <p>Throughout the complex, sets of stones resembling a lion’s paw can be found. Add to these, and located directly above the main walkway of Sacsayhuaman, is the K’usilluc Jink’ian (the “throne”). This area sports a view of the entire fortress, the city of Cusco, and neighboring hills. It is believed that this is where the Inca presided over important ceremonies.</p>
                        <p>Three tall towers once existed and faint outlines found on the highest parts of the ruins bear witness to their locations. The Muyucmarca tower was the political core though it is sometimes mistaken for a solar calendar because of its circular nature. It served not only for defense but also housed food, water, an arms depot, and a temple. Its siblings, the Paucamarca and Sallamarca towers, were devoted to religious and logistics respectively.</p>
                        <p>Various gates mark the areas and layers of the compound but few of these still survive. Most are now gone as they were dismantled in the periods following the conquest. Garcilaso de la Vega is our sole accounting for these gates: Tio Puncu, Acahuana Puncu, and Huiracocha Puncu. Puma Punchu (Gate of the Puma) is a smaller example and is one of remaining examples.</p>
                        <p>June is the most popular time to visit because many celebrations take place during this time. Sacsayhuaman is a wonder to visit at any time, however, as it is one of the most impressive examples of Inca archeology and military architecture. </p>

                        <h5>Qengo</h5>
                        <p>The original name for Qengo is lost to history and its reason for being still remains a mystery. Qengo is a Quechua word for labyrinth and it was named such due to the twisting channels and steps that are carved on the outer rock surfaces.</p>
                        <p>The site is located on hill above Cusco city and consists of two main areas. The Qengo Grande and Qengo Chico sit some hundred yards apart and evidence indicates that the area was a temple that was used during rites surrounding fertility and harvest. One of the largest huacas (a sacred natural place) it represents a manifested spiritual being, pre-Columbian deities that were linked to how these places came to be. </p>
                        <p>“The Mortuary”, an underground room is one of Qengo Grande’s famous features. It is an interior chamber made up of polished walls, ceilings, an altar, niches, and steps all of which were carved from the stone itself. Access to the chamber is via man-made tunnels that work inward.</p>

                        <h5>Pucapucara</h5>
                        <p>Located 4.5 miles from Cusco city and sitting over 12,000 feet above sea level, Pucapucara is comprised of walls, internal plazas, a multitude of small rooms, and aqueducts. Defensive walls among rooms of various sizes indicate that the site was both military and administrative in nature. It may well have been a military base and its name suggests it as well. “Puca” means red and “Pucara” means fortress making this the Red Fortress.</p>
                        <p>A walk up the hill leads to Tambomachay which leads us to believe that this fortress may also have regulated transit to the hydraulic site.</p>

                        <h5>Tambomachay</h5>
                        <p>Tambomachay is a primary example of Inca achievements in hydraulic advancements. This site is located about half a mile from Pucapucara and is above a stream of the same name. It covers over 5000 square feet and is known by the locals as “The Bath of the Inca”.</p>
                        <p>Tambomachay is a series of aqueducts and canals that channel thermal water that then spills out over four walls that form a set of terraces. Unlike many other sites, the terraces were decorative and ritualistic in nature versus agricultural. </p>
                        <p>It is thought that the site was either a military post or used by Inca elites for cleansing rituals. Whatever the purpose, it is a classic example of Inca artistic and architectural mastery over the elements of earth and water.</p>

                    </div>

                    <div id="to-machu-picchu">
                        <h3 class="text-g-yellow pt-5">To Machu Picchu</h3>
                        <h4>Travelling from Cusco to Machu Picchu</h4>
                        <p>There are a number of options to get from Cusco to Machu Picchu. One is, of course, to hike the Inca Trail. If this is not something you wish to do then your only other direct option is to make the trip via train. Fortunately, there are a number of rail options available to you.</p>
                        <p>If you wish to depart from Cucso, a fifteen minute car ride to PeruRail’s primary train station in Poroy is in order. A second option is to depart from the town of Ollantaytambo instead. The Aguas Calientes station is the arrival destination for both routes. Be sure to purchase train tickets well in advance of your trip in order to guarantee availability. This is especially true during the busy season of May through September. Be aware, also, that the train ride from Ollantaytambo averages around two hours vs the four hours it takes from Cusco.</p>
                        <p>Another deciding factor in rail choice may be the scenery. It has been said that the panorama between Ollantaytambo and Aquas Calientes is vibrantly stunning. This route shadows the course of the Urubamba River as it flows through the Andean cloud forest. Alternatively, PeruRail’s Vistadome Train offers a spectacular view of the mountains that hover over the valley.</p>
                        <p>Regardless which option is chosen, schedule at least one leg of your journey during the daylight hours. You won’t regret it the beauty you’ll experience. </p>
                        <p>Arriving in Aguas Calientes is, however, only one portion of the entire trip. To get to Machu Picchu, a shuttle bus must be taken. Tickets may be purchased from the office upon arrival or in advance from the Consettur office in Cusco. Expect buses to run at approximately fifteen minute intervals and don’t expect assigned seating. Time of day will effect waiting time to board the bus so be sure to take that into account.</p>
                    </div>

                    <div id="getting-to-cusco">
                        <h3 class="text-g-yellow pt-5">Getting to Cusco</h3>
                        <h4>Travelling In and Out of Cusco</h4>

                        <h5>What you need to know: By Air</h5>
                        <p>There are a number of flight based options for travelers finding their way into Cusco. Alejandro Velasco Astete International Airport (airport code: CUZ) is located roughly fifteen minutes from the city’s historic center but is not able to handle large aircraft. Because of this, most travelling from abroad fly into the airport in Lima, spend a night there, and depart for Cusco in the morning. This is the norm since most international flights arrive in Lima at night and flights departing for Cusco do so in the mornings. Limited afternoon connections are available via airlines, such as LAN, that own more modernized fleets. You can expect around an hour of travel time regardless of connection used to arrive into Cusco.</p>

                        <h5>What you need to know: By Long Distance Bus or Car</h5>
                        <p>Flight access isn’t the only option, however. For travelers who aren’t pressed for time, have flexibility in their itineraries, or are on a tighter budget, long distance bus trips are available. Be aware that these trips can take anywhere from ten hours (Cusco/Puno or Cusco/Arequipa) to over twenty hours (Cusco/Lima). The longest trips are not recommended, however, because the trip covers dangerous and very windy mountain routes.</p>
                        <p>For those that wish to drive themselves, car rentals are also available but are very expensive and the routes are fraught with risks in the form of narrow highways edged by steep mountainous cliffs and drops.</p>
                        <p>Though these options may seem less expensive than air travel, when you take into account the risks and travel times, the flight choice may well be the better bargain.</p>

                        <h5>What you need to know: By Train</h5>
                        <p>A third, and popular choice, is to board the Andean Explorer and trip it by train from Puno/Lake Titicaca to Cusco. The ride is longer (just under ten hours) but is relaxing and the scenic route is reminiscent of early 20th century rail. Amenities include dining cars and a bar-car where travelers can enjoy the open-air observation deck.</p>

                        <h5>Staying Safe</h5>
                        <p>Caution, common sense, and discretion are your friends! With the exception of admission to Machu Picchu or major credit and purchases, you’ll rarely need your important travel documents on your person. The safest choice here is to leave them in a safe deposit box at your hotel. For those times when you do need them, make sure you carry them concealed and secured close to your person. One good choice is to purchase a money belt.</p>
                        <p>The savvy traveler keeps any personal belongings tucked close and never lets these items out of their sight. Thieves watch for the unwary and a bag hanging on the back of a chair is an easy snatch and grab.</p>
                        <p>Being aware of your surroundings and the people around you is key to staying safe. Travel in groups and trust your instincts. Anything that sparks your suspicion should be avoided and you should never consider it foolish to evade becoming a petty theft target. Be sure to carry with you a fully changed and functional cell phone.</p
                        >
                        <p>Last, but not least, talk to those who live in the area. When you do so you, not only immerse yourself into the culture, you also make friends and help ensure a greater measure of safety for yourself and your belongings. </p>

                    </div>

                    <div id="transportation">
                        <h3 class="text-g-yellow pt-5">Transportation</h3>
                        <h4>Cusco Transportation and Safety</h4>

                        <h5>Cusco Walk-About</h5>
                        <p>You won’t want to miss a thing in Cusco and when you strike out on foot in historic Cusco, you won’t have to. Walking gives you time to linger and appreciate the finely crafted Inca stonework, sculptural colonial architecture, vibrantly colored balconies, and the eccentric shops that line the streets of the city’s historic center. </p>

                        <p>Naturally, the Inca didn’t create their streets and alleys with vehicles in mind and so access to the narrow walkways can only be made by pedestrians, well, and the occasional lama. The narrow street of Hatun Rumiyoc, host of the Stone of Twelve Angles, is but one of many examples of places you won’t be able to see in Cusco unless you set out on foot. </p>

                        <p>Within walking distance of the Plaza de Armas can be found most of Cusco’s main attractions. The structure of the city, however, is such that the some streets are very steep and can pose quite a challenge to many who visit. For those that can’t, or don’t want, to endure the heart racing effort it takes to climb some sets of stairs, there are many other options for travelling around the historic center and the city itself.</p>
                        <h5>Taxis in Cusco</h5>
                        <p>As pointed out earlier in this guide, high elevation can sometimes be problematic. Fortunately, one transportation option in Cusco is taxi service. Fares within the city can range between S/.5 and S/.10 (US$2-3). Travelers should be aware that taxis are not metered and, therefore, prior to climbing in the destination and fare should be settled. Should there be a language barrier, presenting the driver with a business card or a handwritten address can be the answer. Small change in the local currency is the best form of payment. </p>

                        <p>Unfortunately, travelers are at risk to be scammed so get an idea of the standard prices for local services prior to agreeing to them. If possible, arrange official registered taxi services through your hotel or restaurant. Should you be out and need taxi service, look for taxis with a visible placard displayed on the vehicle.</p>

                        <p>Because the area around the historic center, and the Plaza de Armas especially, is comprised of one-way streets vehicles will often need to find convoluted routes to get from one place to another. This can often mean that it will take more time to drive somewhere than it would have taken had you walked instead.</p>

                        <p>Travelers should also be aware that, during some holidays (such as Inti Raymi and Semana Santa), the streets near an around the Plaze de Armas will be closed to automotive traffic. This may mean that, despite the driver dropping you as close as possible, you’ll find yourself on foot with your luggage should your hotel be close to the festival areas.</p>
                        <h5>Combis and buses</h5>
                        <p>Other travel options include combis, which are minivans that have been modified to be used as a shared taxi, mini-buses, and full sized buses. While combis generally provide access to neighborhoods and areas just outside the historic center of the city, mini-buses and full sized buses are often used to offer service between Cusco and surrounding towns. Unlike what you may be used to in other countries, routes and schedules are likely to be haphazard. You may well be in for an unanticipated adventure when you make use of buses!</p>
                    </div>

                    <div id="tourist-ticket">
                        <h3 class="text-g-yellow pt-5">Tourist Ticket</h3>
                        <h4>The Tourist Ticke Cusco</h4>

                        <h5>What is it?</h5>
                        <p>There is so much to see and do in Cusco and the surrounding area and, while much of it is accessible on an individual basis, some attractions are not. Access to these is obtained by purchasing a full or partial Boleto Turistico del Cusco (Cusco Tourist Ticket).</p>

                        <p>The full Boleto Turistico provides entry to 16 different areas of interest and is valid for ten days. For those that wish to visit only some of these, there are three other options:</p>

                        <p>Circuit I – One day access to the following four Inca ruins: </p>
                        <ul>
                            <li>Sacsayhuaman</li>
                            <li>Qenqo</li>
                            <li>Pucapucara</li>
                            <li>Tambomachay</li>
                        </ul>
                        <p>Circuit II – Two day access to the following eight museums:</p>
                        <ul>
                            <li>Centro Qosqo de Arte Nativo (native art and folkloric dance)</li>
                            <li>Monumento a Pachacuteq (Pachacuteq Statue)</li>
                            <li>Museo de Arte Contemporaneo</li>
                            <li>Museo de Arte Popular</li>
                            <li>Museo Historico Regional</li>
                            <li>Museo de Sitio del Qorikancha (museum only, not the Qorikancha site)</li>
                            <li>Pikillacta</li>
                            <li>Tipon</li>
                        </ul>
                        <p>Circuit III – Two day access to four Inca ruins in the Sacred Valley:</p>
                        <ul>
                            <li>Chinchero</li>
                            <li>Ollantaytambo</li>
                            <li>Pisac</li>
                            <li>Moray</li>
                        </ul>
                        <p>Some important sites are not included in the Boleto Turistico. These include:</p>
                        <ul>
                            <li>Machu Picchu</li>
                            <li>The Maras salt mines in the Sacred Valley</li>
                            <li>The Qorikancha</li>
                            <li>The Cathedral in the city’s main plaza</li>
                            <li>The Inca Museum in Cusco</li>
                        </ul>
                        <h5>Boleto Turistico Need-To-Know</h5>
                        <p>The Boeto Turistico only grants access to attractions and does not include transportation or guides. This means you’ll have to book your tours of Cusco or the Sacred Valley, so when you do, be sure to ask if the price includes the cost of your Boleto Turistico choice.</p>
                        <p>There are several purchase location options for your Cusco Tourist Ticket.</p>
                        <ul>
                            <li>The entrance of the principal archeological sites</li>
                            <li>The government and tourist building on Avenida Sol 103 in Cusco offers advanced ticket purchase</li>
                            <li>Selected tourist offices</li>
                            <li>Authorized travel agencies. </li>
                        </ul>
                        <p>Because U.S. dollars and bank cards are not accepted, be sure to bring Peruvian Soles to pay for your ticket. Each ticket is stamped with its dates of validity at the time of your purchase and authorization. Note that tickets are not refundable or extendable and that each attraction can only be visited once within the allotted time frame. </p>
                        <p>You will need to carry identification (ID or a copy of your passport) along with your ticket to be allowed entrance to the various attractions.</p>
                    </div>
                    <div id="where">
                        <h3 class="text-g-yellow pt-5">Where</h3>
                        <h4>Where is Cusco?</h4>

                        <p>One couldn’t ask for a more scenic location in which to discover this fascinating city. Snuggled into the wings of the Andes in southeastern Peru, Cusco can be found south and west of Machu Picchu and the beginnings of the Amazon jungle. Lake Titicaca can be found to the south of the city and some 586 kilometers (364 miles) by air the capital city of Lima awaits.</p>

                        <p>Along with their scenic valley and high altitude plains companions, the snow-capped peaks of the Salkantay and Ausangate mountains welcome those who fly into Cusco. These giants reach above 6,200 meters (20,000 feet) and, on clear days, Ausangate is visible from the city. Both the airport and the bus terminal are located within 20 minutes from the historic area of the city. </p>

                        <p>Spanning from the curves of the river basin, where the oldest sections of the city are found, Cusco stretches into the valley and meanders into the surrounding hills. Indeed, the historic center is just a small section of the present-day city but it is the heart and soul of the region. Locals and travelers alike gather together to participate in the years’ most important cultural events. </p>

                        <p>Thirty minutes via the road to Pisac will take visitors to the Sacred Valley. The ever growing popularity of the valley, due to its historical attractions and lower elevation, can also be reached via the higher altitude town of Chinchero to Urubamba and Ollantaytambo though this trek will need closer to an hour. </p>

                        <p>If nothing else, the diverse geography of the region surrounding Cusco make it a unique visiting experience. Its proximity to both the Amazon and the Andes mean that a record-breaking range of climactic types and biological species can be encountered. Protected by the Peruvian state, the Machu Picchu Historic Sanctuary houses both Machu Picchu and Mt. Salkantay. </p>
                        <p>The reserve itself is home to some 200 orchid, 400 butterfly, and hundreds of other plant and bird species. Those who visit the Cochahuasui Animal Sanctuary, an animal rehabilitation center within the Sacred Valley, are treated to the region’s faunal diversity consisting of endangered condors, parrots and macaws, pumas, and other Andean creatures including llamas, vicuñas, and guanacos.</p>

                        <h5>What you need to know: Altitude Sickness:</h5>
                        <p>While most Cusco visitors will experience few ill effects due to altitude sickness, the best preparation is to be well informed of the symptoms and potential complications. Adjustment to the higher altitude can include:</p>
                        <ul>
                            <li>Headaches</li>
                            <li>Nausea</li>
                            <li>Fatigue</li>
                            <li>Decreased appetite</li>
                            <li>Insomnia</li>
                            <li>Mild shortness of breath</li>
                        </ul>
                        <p>More serious symptoms should not be ignored and medical help sought immediately as some complications, including pulmonary and cerebral edema, can be fatal if not treated. Watch out for extreme lethargy and trouble breathing even while at rest.</p>
                        <p>Plan on enjoying a slow and easy first day in Cusco to allow yourself time to become acclimatized.</p>

                    </div>
                    <div id="packing">
                        <h3 class="text-g-yellow pt-5">Packing</h3>
                        <h4>Planning the trip: What to pack</h4>

                        <p>Because the weather in Cusco is unpredictable and there can be enormous temperature differences throughout the course of the day, the wise traveler makes it a habit to keep an eye on the forecast. Plan to wear layers that can be removed or added as needed throughout the day.</p>
                        <p>In general, lightweight short sleeves are sufficient for the warmer parts of the day and longer sleeves or a warm fleece or sweater come in handy when the sun goes down. Rain and windproof jackets are an essential wardrobe accessory for the rainy season’s torrential downpours. Another essential is some kind of UV protection for both skin and lips regardless of the season. </p>
                        <p>Don’t neglect your feet! Comfortable walking shoes are fine for most day tours while proper hiking boots are best for the more serious trekking. Even so, shoes with thicker soles work just fine for trails where the footing is minimally rocky.</p>
                        <h5>What you need to know: Packing Light</h5>
                        <p>It is tempting to pack everything you think you might need but packing lighter has advantages. Fitting what you’ll need into a single carry-on means you won’t have to worry about missing flight connections or lost or damaged luggage. In addition you can forgo waiting time at the baggage carousel and you’ll save money for checked luggage. You’ll also be far more mobile during your journeys from the airport, hotel, and between all the destinations you’ll want to visit.</p>
                        <p>There are a few keys to this trick! Make a list of all the items you’ll actually need and use and don’t forget that you can easily buy items you may have forgotten or may find you need or want. You’ll certainly want to indulge is the local fashions and it’s easy to purchase an extra bag or two for such things while you’re there.</p>
                        <h5>What you need to know: Cusco Dining Code</h5>
                        <p>Don’t worry! Due to the high populous of backpacking and adventure travelers, the dress codes in the area are not strict. In fact, “Trekker Chic” is the fashion of choice! It is helpful to know, however that there are a smaller number of 5-star Cusco hotels, restaurants, and bars that are classy enough to warrant a more formal dress-up.</p>

                    </div>
                    <div id="weather">
                        <h3 class="text-g-yellow pt-5">Weather</h3>
                        <h4>Cusco Seasons and Weather</h4>
                        <p>Rainy and dry, South America’s summer and winter respectively, are the two seasons Peru’s highland regions can boast. From November to March, visitors can expect steady rain with January and February being the wettest months. While cloudy skies (which provide insulation and more temperate evening weather) are the norm, sunshine peeks through occasionally. Rainy season temperatures range from 16°C (60°F) during the day to 8°C (46°F) at night.</p>

                        <p>From May to October, the dry season reigns. During this time temperatures fluctuate dramatically between day and night due to a lack of cloud cover though snowfall in Cusco is rare. Be prepared for ranges of warmer 18-19°C (64-67°F) during the day and more frosty nights around 1°C (33°F).</p>

                        <p>For those wishing to experience a wider variety of climates, the mountainous regions around Cusco provide everything from warm and humid valleys to frigid plains in the higher altitudes. </p>
                    </div>
                    <div id="hotels">
                        <h3 class="text-g-yellow pt-5">Hotels</h3>
                        <h4>Cusco Hotels</h4>

                        <p>You won’t find a dearth of places to stay when you visit Cusco. Hotels range anywhere from 5-star luxury to serene and private to comfy Bed and Breakfasts. The choices are outstanding and you may wish to consult with your travel advisor at GOTOPERU for help in deciding what will work best for you. </p>

                        <p>Here we’ll list a few to get you started.</p>
                        <h4>Casa Andina San Blas</h4>
                        <p>The Casa Andina San Blas is just a short walk away from the main plaza in Cusco’s San Blas area. It features vaulted ceilings and dark woodwork that gives it an alpine-cottage feel. Décor is completed with Andean rugs, broad glass windows, and a stone crafted fountain in the central courtyard.</p>

                        <p>Rooms are large and well-appointed with bathtubs, hair dryers, and reliable hot water. The view from any room is superb and reasonable pricing make this hotel a perfect choice for those wishing to splurge on any of the sites and attractions that abound.</p>
                        <h4>Casa Andina Private Collection</h4>
                        <p>Guests who wish to stay closer to the main plaza in Cusco without the noise of the night life may wish to choose this hotel. Patterned after an 18th century mansion and located in the quieter corner of Qorikancha in historic Cusco, the hotel boasts four open courtyards and a gurgling stone fountain. The lounge features a large stone fireplace and a relaxing atmosphere.</p>
                        <p>Rooms in this hotel are all non-smoking and offer free wifi. Guests may choose between one king size bed or two full beds and each room comes equipped with a desk, safety box, a flat screen television, and coffee kits. The hotel also offers ATM and same-day laundry service.</p>
                        <h4>Aranwa Cusco Boutique</h4>
                        <p>This hotel’s 16th century architecture exudes luxury and is appointed by a vast collection of colonial-era Cusco School style paintings and sculptures. The Arwana is a 5-star hotel that caters to their guests’ need for higher altitude acclimation. Each elegant room is equipped with a smart oxygen system that feeds O2 directly into the rooms.</p>
                        <p>Organic baths, heated floor tiles, Scottish showers, and gracefully detailed marble are just some of the luxuries travelers can expect while staying here. Other amenities available include currency exchange, laundry service, spa, sauna, and a hair salon.</p>
                        <h4>Andean Wings</h4>
                        <p>The Andean Wings is located only a couple blocks from the Plaza de Armas which means it is close to a slew of restaurant, bar, and shopping options. Each room in this 4-star hotel is unique and each is inspired from various Peruvian influences.</p>
                        <p>Amenities featured include wireless internet, laundry service, and room service. The Six Pumas Holistic Spa offers guests a variety of massage options, Zen Shiatsu, and other therapies. Their on-site restaurant serves up Peruvian specialties such as lomo saltado and grilled trout.</p>
                        <h4>Casa San Blas Boutique</h4>
                        <p>Tucked in the cozy San Blas area, the Casa San Blas Boutique is a comfortable choice in historic Cusco. Not far away is the Plaza de Armas as well as one of Cusco’s most famous streets, Hatun Rumiyoc. This hotel’s architecture was inspired from Andean textile-weaving and each room is named after an animal or design that are often featured in Quechua textiles.</p>
                        <p>The hotel’s on-site restaurant, the Tika Gourmet Bistro, serves lunch and dinner as well as offering room-service.</p>
                        <h4>Hotel Pakaritampu</h4>
                        <p>Located at Avenida Ferrocarril in the Sacred Valley. This is a charming hotel found a short distance from the train station in Ollantaytambo. It offers scenic views of the mountains and beautiful gardens.</p>
                        <h4>El Albergue</h4>
                        <p>Located at Avenida Estacion (next to the train platform) in the Sacred Valley If you’re looking for an alternative that isn’t as fancy as some, El Alberque is the answer to your desires. It is a small and homey inn that offers spacious and rustic rooms with free WiFi and an in-house café – the Café Mayu.</p>

                    </div>
                    <div id="restaurants">
                        <h3 class="text-g-yellow pt-5">Restaurants</h3>
                        <h4>Cusco Places to Eat</h4>

                        <h5 class="text-secondary">Restaurants</h5>
                        <p>Along with its bevy of hotels, Cusco and the surrounding areas treat travelers to a wide choice of dining experiences. Listed here are just a few of these wonderful places to eat.</p>

                        <p>Dress tends toward casual and major credit cards are accepted at most of the upscale restaurants. To ensure eating at your choice of restaurants, reservations are highly recommended. For help, please speak with your travel advisor at <a href="http://gotoperu.com/">GOTOPERU.</a></p>

                        <h5 class="text-secondary">Limo</h5>
                        <p>The Limo overlooks the central plaza of Cusco and features modern décor and dishes served with Cusquenan flare.</p>

                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Portal de Carnes 236, 2nd floor</td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 240-668</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 11am– 11pm</td>
                            </tr>
                            <tr>
                                <td><b>Best seats</b></td>
                                <td>By the windows overlooking the central plaza.</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>Reservations Recommended. Credit Cards Accepted.</td>
                            </tr>
                            <tr>
                                <td><b>Main courses</b></td>
                                <td>$10-20.</td>
                            </tr>
                            </tbody>
                        </table>


                        <h5 class="text-secondary">MAP Caf&eacute;</h5>
                        <p>This caf&eacute; can be found within the Museo de Arte Precolumbino. Its crystal cube décor makes dining here a unique artistic experience.</p>
                        <p>Organic baths, heated floor tiles, Scottish showers, and gracefully detailed marble are just some of the luxuries travelers can expect while staying here. Other amenities available include currency exchange, laundry service, spa, sauna, and a hair salon.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Casa Cabrera (inside Museo de Arte Precolombino), Plaza Nazarenas 231. </td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 242-476. </td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 11am– 3pm and 6– 10pm.</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>Make Reservations. Credit Cards Accepted.</td>
                            </tr>
                            <tr>
                                <td><b>Main courses</b></td>
                                <td>$20-$30; Prix-fixe 3-course dinner menu about $62</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Cicciolina</h5>
                        <p>Cicciolina, a Mediterranean/International bakery and Tapas bar, can be found on the second floor of a restored colonial home just around the corner from the Cusco Cathedral. By day the bakery fare tempts passersby and by evening visitors can enjoy a cozy dinner and scrumptious desert.</p>

                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Calle Triunfo 393 2nd floor, Cusco</td>
                            </tr>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.cicciolinacuzco.com/" target="_blank">http://www.cicciolinacuzco.com/</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 239-510 </td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Mon-Sun 8:00-11:00; 12:00-15:00 and 18:00-22:00</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>Reservations Recommended. Credit Cards Accepted.</td>
                            </tr>
                            <tr>
                                <td><b>Main courses</b></td>
                                <td>$10-$20</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Greens Organic</h5>
                        <p>Greens Organic makes eating healthy a decadent delight. The restaurant makes use of Andean protein-rich grains and legumes as well as local produce to create a menu that tastes as rich as the items it features.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Santa Catalina Angosta 135, Piso 2, Plaza de Armas</td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 254-753</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 12:00-21:30</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>No reservations required, but recommended. No credit cards.</td>
                            </tr>
                            <tr>
                                <td><b>Main courses</b></td>
                                <td>$12-$25</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Chicha</h5>
                        <p>Located in both Arequipa and Cusco, Chicha offers multiple chances to feast on a combination of Andean and Peruvian specialties. Gaston Acurio, Peru’s most celebrated chef, is responsible for culinary discoveries here as well as his flagship restaurant in Lima, Astrid &amp; Gaston.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Plaza Regocijo 261, 2nd floor.</td>
                            </tr>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.chicha.com.pe/" target="_blank">http://www.chicha.com.pe/</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 240-520</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Mon-Sat 12:00-23:00 - Sun 12:0-17:00</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>Good vegetarian option. Reservations recommended. Credit cards accepted.</td>
                            </tr>
                            <tr>
                                <td><b>Main courses</b></td>
                                <td>$10-$20</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Pachapapa</h5>
                        <p>Pachapapa features traditional Peruvian cuisine and is best known for two dishes: Cuy Horneado con Huacatay y Ají Panca (a whole guinea pig roasted with special Peruvian herbs and hot yellow pepper), and Pachamanca which consists of various tubers, corn, and meats all baked in a traditional ground oven.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Address</b></td>
                                <td>Plaza San Blas 120, San Blas</td>
                            </tr>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.cuscorestaurants.com/pachapapa/" target="_blank">http://www.cuscorestaurants.com/pachapapa/</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 241-318</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>11:30-22:00</td>
                            </tr>
                            <tr>
                                <td><b>Tips</b></td>
                                <td>Call 24 ahead to reserve the Cuy (guinea pig) or Pachamanca (ground-oven baked assortment). Reservations strongly recommended.</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Cafes</h5>
                        <div class="sec-title-div-5"></div>
                        <h5 class="text-secondary">Jack’s Caf&eacute;</h5>
                        <p>Located at the crossroads between the Plaza de Armas and the San Blas neighborhood, Jack’s Café satisfies palates yearning for a taste of home. The serve everything from any style eggs to pancakes, to burgers, and chicken soup.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://jackscafecusco.com/" target="_blank">http://jackscafecusco.com/pachapapa/</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84-254606</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>7:30 - 23:30</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>No Reservations Available</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">La Bodega 138</h5>
                        <p>Proving that pizza is popular the world over, La Bodega 138 stands out from all the others by serving pizzas made with the freshest, locally grown ingredients. Each pie is made to order so you’re certain to be satisfied.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 260-272</td>
                            </tr>
                            <tr>
                                <td><b>Dining options</b></td>
                                <td>Breakfast, Brunch, Lunch, and Late Night</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>Closed Sun. Reservations Available</td>
                            </tr>
                            <tr>
                                <td><b>Price per plate</b></td>
                                <td>$7-$12</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Fallen Angel</h5>
                        <p>The Fallen Angel is one of Cusco’s hidden surprises. This original dining experience serves an array of taste treats including Mediterranean, Andean, Steak, and vegetarian options.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.fallenangelincusco.com/wordpress/?page_id=37" target="_blank">http://www.fallenangelincusco.com</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 258-184</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td> Mon-Fri 11am-11pm; Sat-Sun 2-11pm</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>Closed Sun. Reservations Available</td>
                            </tr>
                            <tr>
                                <td><b>Price per main course</b></td>
                                <td>$15-$25</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Choco Museo</h5>
                        <p>If you are a chocolate lover, then you’re going to adore Choco Museo. This café/museum/workshop is an expert in all things chocolate and serves a delicious list of items from chocolate treats to coffee to cocoa tea.</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.chocomuseo.com/english/our-locations/cusco-per/" target="_blank">http://www.chocomuseo.com/</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 244-765</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Monday - Sunday 10:30 AM to 6:30 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>Cost of workshops vary and must be booked.</td>
                            </tr>
                            <tr>
                                <td><b>Price for beverage</b></td>
                                <td>$3-$5</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">The Sacred Valley Eateries</h5>
                        <div class="sec-title-div-5"></div>
                        <h5 class="text-secondary">Blue Puppy Lounge and Restaurant</h5>
                        <p>(Peruvian fusion cuisine) – Located in the Plaza de Armas, Calle del Horno</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.cuzcodining.com" target="_blank">http://www.cuzcodining.com</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 630-464</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>7:30 AM - 11:30 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>Also a great place to grab a cocktail, fresh juice or milkshake</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$10</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Mayupata</h5>
                        <p>(Peruvian fusion cuisine) – Located at Jr. Convencion (Opposite of the Templo de Santiago Apostol)</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 204-009</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 10 AM to 9 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>The pizzas are very large and are good for at least 2 hungry travelers</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$10</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Pachamama (Pizzeria)</h5>
                        <p>Located in the Plaza de Armas</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 204-168</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 8 AM to 10 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td>Stop in for lunch and grab a table outside to soak up the local vibes of the town and enjoy some leisurely people watching.</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$8</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Puka Rumi (Mexican fusion cuisine)</h5>
                        <p>Located in the Calle Ventiderio</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 204-151</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 7:30 AM to 10 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td> The burrito and fajita plates come with countless sides so you can build them any way your heart desires.</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$7</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Cafe Mayu (Cafe)</h5>
                        <p>Located at the Estacion de Tren Ollantaytambo</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 204-014</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 7 AM to 7 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td> Does not accept credit cards</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$5 (To-go orders $10)</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="text-secondary">Hearts Café (Café)</h5>
                        <p>Located at Avenida Ventiderio</p>
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>Website</b></td>
                                <td><a href="http://www.heartscafe.org/" target="_blank">www.heartscafe.org</a></td>
                            </tr>
                            <tr>
                                <td><b>Phone</b></td>
                                <td>(+51) 84 436-726</td>
                            </tr>
                            <tr>
                                <td><b>Hours</b></td>
                                <td>Daily 7 AM to 10 PM</td>
                            </tr>
                            <tr>
                                <td><b>Note</b></td>
                                <td> Does not accept credit cards</td>
                            </tr>
                            <tr>
                                <td><b>Average price per plate</b></td>
                                <td>$5</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <div id="night-life">
                        <h3 class="text-g-yellow pt-5">Night Life</h3>
                        <h4>Night Life Fun</h4>

                        <p>Eating, drinking, and making merry are easy to find in Cusco and we’ve listed here a number of places you might want to visit.</p>

                        <p>Here we’ll list a few to get you started.</p>
                        <h5>Bars, Lounges &amp; Cocktails</h5>
                        <p>The Casa Andina San Blas is just a short walk away from the main plaza in Cusco’s San Blas area. It features vaulted ceilings and dark woodwork that gives it an alpine-cottage feel. Décor is completed with Andean rugs, broad glass windows, and a stone crafted fountain in the central courtyard.</p>

                        <ul>
                            <li>Museo del Pisco</li>
                            <li>Limo’s Pisco Bar</li>
                            <li>Fallen Angel</li>
                            <li>Paddy’s Irish Pub</li>
                            <li>Norton Rat’s Tavern</li>
                        </ul>
                        <h5>Folklore, Performing Arts &amp; Theater</h5>
                        <ul>
                            <li>Kusikay Theater Company</li>
                            <li>Centro Q'osqo de Arte Nativo</li>
                            <li>Teatro Municipal</li>
                            <li>
                                Restaurants featuring dinner shows
                                <ul>
                                    <li>La Retama</li>
                                    <li>El Truco</li>
                                    <li>Tayta Inti</li>
                                    <li>Tunupa</li>
                                </ul>
                            </li>
                        </ul>
                        <h5>Cinema and Live Music</h5>
                        <ul>
                            <li>8-theater cinema located in the Real Plaza Cusco</li>
                            <li>El Garabato Video Pub </li>
                            <li>The Film Lounge &amp; Danish Caf&eacute;</li>
                            <li>Ukukus Bar Cultural</li>
                            <li>Le Nomade</li>
                            <li>The Muse</li>
                        </ul>
                        <h5>Dance Clubs and Discotecas</h5>
                        <ul>
                            <li>Mama Africa/Mushrooms</li>
                            <li>Mythology</li>
                            <li>Kamikaze</li>
                        </ul>
                        <h5>Casa San Blas Boutique</h5>
                        <p>Tucked in the cozy San Blas area, the Casa San Blas Boutique is a comfortable choice in historic Cusco. Not far away is the Plaza de Armas as well as one of Cusco’s most famous streets, Hatun Rumiyoc. This hotel’s architecture was inspired from Andean textile-weaving and each room is named after an animal or design that are often featured in Quechua textiles.</p>
                        <p>The hotel’s on-site restaurant, the Tika Gourmet Bistro, serves lunch and dinner as well as offering room-service.</p>
                        <h5>Hotel Pakaritampu</h5>
                        <p>Located at Avenida Ferrocarril in the Sacred Valley. This is a charming hotel found a short distance from the train station in Ollantaytambo. It offers scenic views of the mountains and beautiful gardens.</p>
                        <h5>El Albergue</h5>
                        <p>Located at Avenida Estacion (next to the train platform) in the Sacred Valley If you’re looking for an alternative that isn’t as fancy as some, El Alberque is the answer to your desires. It is a small and homey inn that offers spacious and rustic rooms with free WiFi and an in-house café – the Café Mayu.</p>

                    </div>

                    <div id="machu-picchu">
                        <h3 class="text-g-yellow pt-5">Machu Picchu</h3>
                        <img src="{{asset('images/guia/mapi.webp')}}" alt="Machu Picchu" class="img-fluid mb-3">
                        <p>Spread over 32,592 hectares, in the basins of the river Vilcanota - Urubamba are the ruins of Machu Picchu. In 15th century, The Incan empire developed the site into a phenomenon masterpiece - Machu Picchu. This was the greatest empire in the pre-Columbian America. They built this city in the 15th century and later abandoned it .Thus it is often referred to as “The Lost city of Incas”. This enigmatic city is famous for its archeological sites, throughout South America. It is acclaimed globally for its disillusioned dry-stone walls which are fitted together meticulously with mortarless joints in such a way that not even a thin knife blade can be inserted through them.Visit the most intriguing destination in the world to witness the cathedrals, a collection of beautiful temples, the terraced hills and plazas. There are structures, sculpted from the gray granite of the mountain top that are stupefaction of both the architectural as well as the aesthetic brilliance. Merging in with the hillside itself, people say the area spawns a flawless and sumptuous green paradise, thus making it a must visit place for every tourist who travels to Peru.</p>
                    </div>
                    <div id="sacred-valley">
                        <h3 class="text-g-yellow pt-5">Sacred Valley</h3>
                        <img src="{{asset('images/guia/valle-sagrado.webp')}}" alt="Sacred Valley Peru" class="img-fluid mb-3">
                        <h4>The Sacred Valley of the Incas</h4>
                        <p>The Sacred Valley of the Incas, also know as the Urubamba Valley is located in the Andes of Peru, and is in between Cusco and Machu Picchu. This valley is fed by various rivers flowing out of the valleys and gorges. It is filled with old archaeologically preserved villages and monuments. The special climatic and geographic conditions made this city one of the most appreciated places by the Incas. It was believed to be a spiritual base of the Incan empire. Today this eternal region, is a quiet domain of country that is immersed in Andean culture and history. The modernity and tradition is equally balanced in this city. Devoting some time to the small towns of Sacred Valley and archaeological sites, is a clear evidence of a Peruvian lifestyle and also describes the unbelievable capabilities of the once-glorious Inca Empire. Even today, the locals at the markets communicate speaking their traditional Quechua language, while the colonial constructions offer a glimpse of the Spanish culture. The Sacred Valley is a hotspot for trek lovers due to the splendid mountain passses offering some magnificent views. The travellers are awestruck by the beauty and uniqueness of this city which in turn has brought an influx of even more travellers from around the world.</p>

                        <h5>Ollantaytambo</h5>
                        <p>Known as the Sacred Valley’s most precious gem or as the “living Inca city”, Ollantaytambo rewards those who take a closer look a glimpse into a view of what small town daily life is like in modern Peru. One unique feature of this town is that it has remained inhabited with no interruptions since Inca times.
                            Exquisite stonework as well as ancient technology, including terraces, fountains, and irrigation canals still in use today, can be viewed side by side. Together they make Ollantaytambo one of the most sophisticated of the Inca constructs.</p>
                        <ul>
                            <li>Where: Ollantaytambo, 40 miles from Cusco City, 25 miles from Machu Picchu </li>
                            <li>Accessibility: Car/Bus from Cusco City, Train from/to Machu Picchu</li>
                            <li>Schedule (archeological site): Monday-Sunday, 07:00 - 18:00 hrs</li>
                            <li>Fee: Included in the Boleto Turistico; single entry also available</li>
                            <li>Average Hiking Time: 2-3 hours</li>
                            <li>What to Bring: Comfortable shoes with non-slippery sole, sunscreen, sunglasses, hat, poncho or umbrella (during rainy season), water </li>
                            <li>ATM: Available on the Plaza de Armas.</li>
                            <li>Handicap Accessible: No. Consult with hotel and tour operators to arrange accommodations or contact your travel adviser at GOTOPERU for help</li>
                        </ul>

                        <h5>Urubamba</h5>
                        <p>Urubamba is the largest town in the Sacred Valley and offers a quieter and more easygoing alternative to staying in Cusco. Short forays from the main road offers travelers a breathtaking opportunity to view the mountainous backdrop and a countryside covered in wild flowers and pisonay trees.</p>

                        <h5>Pisac</h5>
                        <p>Sunday crafts markets are a favorite in this town and offer visitors a chance to purchase local goods on their way to the surrounding ruins. Intihuatana boasts exceptional stonework and can be seen along with massive wall that protects one side of the citadel and five gates (four unnamed). Two tunnel systems, an Inca bridge, towers, statues, and a largely unexcavated cemetery are among other worthwhile sites here.</p>

                        <h5>Calca</h5>
                        <p>During pre-Columbian times, Calca was a trading garrison that connected the highlands with the lower mountain regions. Spectacular views of the Pitusiray and Sahuasiray mountains can be had during a visit here. But the more popular reason to stop at Calca are the two systems of natural springs, formed from a combination of snowy peaks and volcanic soil,that can be found here.</p>

                        <h5>Yucay</h5>
                        <p>Yucay is sometimes called the Historic Capital of the Sacred Valley and is the home of the Sayri Tupac ruins, the Antibamba gateway, and Santiago Church. The town’s charm is its tranquility and pleasant climate so staying here offers a time for meditation and peace</p>

                        <h5>Chinchero</h5>
                        <p>This thriving agrarian community is the focal point for a dramatic change due to plans to build a new airport here. The feria dominical, or Sunday fair, is a trading festival that occurs every Sunday. Locals and tourists alike attend to buy and sell local products and flair.</p>

                        <h5>Moray</h5>
                        <p>In addition to the local ruins, Moray is attractive for the abundance of sports activities. Horseback riding, hiking, and mountain biking are among the most popular. Its altitude makes it advisable for anyone wishing to participate to allow themselves time to acclimate.</p>

                        <h5>Maras</h5>
                        <p>Maras offers views of the Veronica and Qaqawiñay mountains. The slopes of Qaqawiñay provide rose-colored salt crystals which are formed from natural wells that dry out once the rainy season ends. A spring near the mountain sends salty water down the slope and is responsible for filling these natural wells.</p>

                        <h4>Adventure sports in Cusco and the Sacred Valley</h4>
                        <p>There is a plethora of adventures to be had in Cusco and the surrounding areas. Listed here are a few of the favorites and if you need more details on the when’s where’s be sure to consult with your GOTOPERU trip advisor.</p>
                        <ul>
                            <li>Horseback Riding</li>
                            <li>Mountain Biking</li>
                            <li>River Rafting</li>
                            <li>1-day treks</li>
                            <li>Ziplining</li>
                            <li>Rock climbing</li>
                        </ul>

                    </div>
                    <div id="lake-titicaca">
                        <h3 class="text-g-yellow pt-5">Lake Titicaca</h3>
                        <img src="{{asset('images/guia/titi.webp')}}" alt="Titicaca" class="img-fluid mb-3">
                        <p>Let us take you to the largest lake by volume in South America called Lake Titicaca. It is situated between Peru and Bolivia. This fascinating lake is situated some 3800 metres above the sea level. The crystal blue water, the serene islands the splendid ruins of this mystical lake has lured a lot of travellers. This lake is believed to be a sacred place as per the Incan civilization, since their first Inca king was born here. Recently, a temple was discovered submerged in this much-venerated sacred lake, which has added to its mystical fascination. Remnants on the shore as well as on the islands of the lake substantiate the earlier existence of one of the most ancient civilizations ever known in the America. The local people inhibiting the Titicaca Basin still practice the traditional ancient approach of agriculture on the slopy stepped terraces that are existing eversince the Incan civilzation. The impact of the ancient traditions can still be seen in the present day culture and has remained uninfluenced by the present day modern world. The traditions here stay as still as the water of the limpid and slightly brackish lake. Live a surreal dream, by embarking this highest commercially available navigable lake. Captivating and in many ways bizarre, the glistening deep blue Lake Titicaca is the inherent home of highland civilization drenched in the ancient ways.</p>
                    </div>
                    <div id="lima">
                        <h3 class="text-g-yellow pt-5">Lima</h3>
                        <img src="{{asset('images/guia/lima.webp')}}" alt="Lima" class="img-fluid mb-3">
                        <p>Lima is the capital as well as the largest city in Peru. Lima happens to be a curious mix of the medieval architectural remains and rural villages and slum, and the present day modern city. It has a cluster of churches and monasteries influenced by the Spanish culture and architecture. Adding to the beauty and charm of this place, are some of the incomparable views of the magnificently large Pacific ocean. Lima is an iconic evidence of Peru’s historical past and is covered in layers of culture and traditions upon which rests the development of the modern city life. Peruvian cuisine is a special highlight for the travellers. The vast sea coast with the cold sea current makes it rich in seafood. Each and every nook and corner of Lima, including the boulevards and avenues, parks, colonial buildings, ancient museum, and prehistoric relics will illustrate an anecdote of Peru’s evolution and its advancement into a contemporary society.Its inevitable to be intrigued by the story and the people of this beautiful city while your stay here.</p>
                    </div>
                    <div id="treks">
                        <h3 class="text-g-yellow pt-5">Treks</h3>
                        <img src="{{asset('images/guia/treking.webp')}}" alt="Trekking Peru" class="img-fluid mb-3">
                        <h4>What you need to know: Trekking options</h4>

                        <h5>Inca Trail to Machu Picchu</h5>
                        <p>This is a 4-day, 26 mile trek that covers two mountain passes, steep stone steps, and ends at the Sun Gate of Machu Picchu. Permits for this trek typically sell out months in advance so, if you’re planning a visit anytime from May to August, you’ll want to book well ahead of time.</p>

                        <h5>Salkantay Trek</h5>
                        <p>This is a 5-day journey and is one of the most popular treks aside from the Inca Trail. Because this trek doesn’t require a permit, it’s easier to access and can be experienced alone or as part of a group. The morning of the 6th day includes a visit to Machu Picchu.</p>

                        <h5>Lares Trek</h5>
                        <p>This trek typically spans 3-days with a visit to Machu Picchu on the 4th day. Here you’ll venture into the highlands above the Sacred Valley and witness communities of those native to the area. You’ll get to interact and see their agriculture and what they produce including woven textiles as well as enjoy the natural hot springs near the town of Lares. Unlike other treks, this one is customized to fit your interests and abilities.</p>

                        <h5>Choquequirao Trek</h5>
                        <p>This is one of a two alternative treks and its final destination is Choquequirao (also known as Machu Picchu’s sister city). There are two versions of this trek – a 4 or 5 day tour that departs and returns to the town of Cachora, or a 9-day tour that continues deeper into the terrain until it reaches the site of Machu Picchu.</p>

                        <h5>Vilcabamba</h5>
                        <p>This trek visits the town of Espiritu Pampa and gives trekkers the opportunity to experience the ruins of the last rebel stronghold of the Incas. Travelers end at Aquas Calientes and finish their tour with a visit to Machu Picchu.</p>

                        <h5>Luxury Trek</h5>
                        <p>For those who need or prefer the comforts of lodges versus “roughing it”, there is a way to experience these treks. The Lodge to Lodge Trek is operated by the Mountain Lodges of Peru and follows the same route as the Salkantay Trek. It also adds an extra day so trekkers can behold the wonders of the glaciers and lagoons near the Salkantay peak. As with other treks, this one also ends with a tour of Machu Picchu.</p>
                    </div>
                </div>
                <div class="col-3 d-none d-sm-block">
                    <div class="sticky-top sticky-top-50">
                        <nav id="menu" class="navbar navbar-light nav-goto-side w-100">
                            <nav class="nav nav-pills flex-column w-100">
                                <a class="nav-link active" href="#cusco">Cusco</a>
                                {{--<nav class="nav nav-pills flex-column w-100">--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#intro">Intro</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#main-attractions">Main Attractions</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#to-machu-picchu">To Machu Picchu</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#getting-to-cusco">Getting to Cusco</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#transportation">Transportation</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#tourist-ticket">Tourist Ticket</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#where">Where</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#packing">Packing</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#weather">Weather</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#hotels">Hotels</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#restaurants">Restaurants</a>--}}
                                    {{--<a class="nav-link ml-3 my-1" href="#night-life">Night Life</a>--}}
                                {{--</nav>--}}
                                <a class="nav-link" href="#machu-picchu">Machu Picchu</a>
                                <a class="nav-link" href="#sacred-valley">Sacred Valley</a>
                                <a class="nav-link" href="#lake-titicaca">Lake Titicaca</a>
                                <a class="nav-link" href="#lima">Lima</a>
                                <a class="nav-link" href="#treks">Treks</a>
                                {{--<nav class="nav nav-pills flex-column w-100">--}}
                                {{--<a class="nav-link ml-3 my-1" href="#seccion-4">Item 3-1</a>--}}
                                {{--<a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>--}}
                                {{--</nav>--}}
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.page.form-quote')


@stop