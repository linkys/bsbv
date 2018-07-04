@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="m-close" data-dismiss="modal"><img src="public/images/icons/close.svg" alt="Close"></button>
            <div class="modal-body">
                <div class="left-img"> <img src="public/images/pictures/man.png" alt="Picture"> </div>
                <form action="#">
                    <div class="form-box">
                        <h2>Callback</h2>
                        <p>49 (0) 931 - 45 24 24 3</p>
                        <div class="row-line first">
                            <input type="text" id="namem" placeholder="Name*" name="namem" />
                        </div>
                        <div class="row-line">
                            <input type="text" id="name2m" class="mask" placeholder="Telefon*" name="name2m" />
                        </div>
                        <textarea id="messagem" placeholder="(Optional) Desired time to callback or other details" name="messagem"></textarea>
                        <input class="wpcf7-submit" value="Rückruf anfordern" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="m-close" data-dismiss="modal"><img src="public/images/icons/close.svg" alt="Close"></button>
            <div class="modal-body m2">
                <div class="left-img"> <img src="public/images/pictures/pic.png" alt="Picture"> </div>
                <form action="#">
                    <div class="form-box">
                        <h2>Anfrage Stellen</h2>
                        <div class="row-line first">
                            <input type="text" id="namem2" placeholder="Name*" name="namem2" />
                        </div>
                        <div class="row-line">
                            <input type="email" id="name2m2" placeholder="Email*" name="name2m2" />
                        </div>
                        <div class="row-line first">
                            <input type="text" id="namem3" placeholder="Name*" name="namem3" />
                        </div>
                        <div class="row-line">
                            <select id="selectm" name="selectm">
                                <option>Select your topic</option>
                                <option>App Entwicklung</option>
                                <option>E-Commerce</option>
                                <option>Mobile &amp; Web</option>
                                <option>Grafik &amp; Design</option>
                                <option>QA &amp; Testing</option>
                                <option>BPO Services</option>
                                <option>Noch nicht bestimmt</option>
                            </select>
                        </div>
                        <input class="wpcf7-submit wpcf7-submit-2" value="Anfrage Stellen" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="image-box">
    <div class="left-box">
        <div class="info">
            <a href="#" class="flag"><img class="img-responsive" src="public/images/icons/flag.gif" alt="Picture" /></a>
            <ul>
                <li><a href="#">Outsourcing</a></li>
                <li><a href="#">Outstaffing</a></li>
                <li><a href="#">Recruiting</a></li>
            </ul>
            <div class="indent">
                <h1>Wir realisieren IT-Projekte</h1>
                <p>Unser Team von hochqualifizierten Entwicklern aus Osteuropa mit Schweizer Management bietet Ihnen das komplette Leistungsspektrum von UX / UI-Design bis hin zu zahlreichen Programmiersprachen</p>
            </div><a href="#Modal2" data-toggle="modal" class="btn rounded-0">Anfrage Stellen</a></div>
    </div>
    <div class="right-box">
        <div class="pic"><img class="img-responsive" src="public/images/pictures/main-image.jpg" alt="Picture" /></div>
    </div>
</div>
<div class="forma-box bg">
    <div class="text-bg">
        <p>Unser Anspruch ist es, eine Qualität zu liefern, die Sie begeistern wird, zu einem Preis, den Sie lieben werden!</p>
    </div>
    <div class="info-area">
        <div class="forma">
            <h5>Möchten Sie mehr über unsere Leistungen erfahren?</h5>
            <div class="tel">
                <p>Callback</p><a href="tel:4909314524243">49 (0) 931 - 45 24 24 3</a></div>
            <form action="#">
                <div class="form-box">
                    <div class="row-line">
                        <input type="text" id="name" placeholder="Name*" name="name" />
                    </div>
                    <div class="row-line">
                        <input type="text" id="name2" class="mask" placeholder="Telefon*" name="name2" />
                    </div>
                    <div class="row-line row-other">
                        <textarea id="message" placeholder="(Optional) Desired time to callback or other details" name="message"></textarea>
                    </div>
                    <input class="wpcf7-submit" value="Rückruf anfordern" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="text-area">
    <div class="info-area">
        <h2>Outsourcing von IT-Services und Softwareentwicklung</h2>
        <p>Alle Entwickler und IT-Professionals von uns verfügen über eine exzellente Ausbildung / Fachstudium und setzen seit Jahren professionell und zuverlässig technisch anspruchsvolle IT-Projekte um. Bei jeder Beauftragung bringen wir geballtes Wissen, Erfahrung und Engagement in Ihre Software-Projekte ein.. </p>
    </div>
</div>
<div class="bg boxes-area">
    <div class="small-area">
        <h4>Alle IT Dienstleistungen aus einer Hand</h4> </div>
</div>
<div class="boxes">
    <div class="photo-box">
        <a href="#">
            <span class="title">OUTSOURCING</span>
            <img class="img-responsive" src="public/images/pictures/it-outsourcing-img.png" alt="Picture" />
            <strong class="dis-non"></strong>
        </a>
        <div class="bg-2"> <span class="span-2">Auslagerung kompletter IT-Projekte</span>
            <p>Ihr Partner für effizientes Outsourcing in den Bereichen Entwicklung, Produktion, BPO, Qualität sowie Administration.</p>
        </div>
    </div>
    <div class="photo-box">
        <a href="#"> <span class="title">Outstaffing</span> <img class="img-responsive" src="public/images/pictures/it-outstaffing-img.png" alt="Picture" /> <strong class="dis-non"></strong></a>
        <div class="bg-2"> <span class="span-2">Dedicated Development Teams</span>
            <p>Mit unserem zuverlässigen und flexiblen Service können wir Ihren Personalbedarf mit qualifizierten Mitarbeitern decken.</p>
        </div>
    </div>
    <div class="photo-box">
        <a href="#"> <span class="title">Recruitment</span> <img class="img-responsive" src="public/images/pictures/it-recruiting-img.png" alt="Picture" /> <strong class="dis-non"></strong></a>
        <div class="bg-2"> <span class="span-2">Personalbeschaffung zur Übernahme</span>
            <p>Wir bieten moderne Recruiting Kampagnen, klassische Personalberatung und Personal Staffing in Osteuropa an.</p>
        </div>
    </div>
</div>
<div class="text-list list-other">
    <div class="info-area">
        <h2>Warum BSBV der richtige Partner ist</h2>
        <div class="list-post">
            <div class="im"> <img src="public/images/pictures/tech.svg" alt="Picture" /> </div>
            <div class="desc">
                <div class="desc-box">
                    <ul>
                        <li><strong>15 years</strong>
                            <br/> of expertize in recruiting, seeking professionals and hiring</li>
                        <li><strong>Online</strong>
                            <br/>Access to huge Experts Database</li>
                    </ul>
                </div>
                <div class="desc-box">
                    <ul>
                        <li><strong>24 / 7</strong>
                            <br/> Customer help and support</li>
                        <li><strong>Top</strong>
                            <br/>Local and Remote Professionals and Experts are available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-other bg">
    <div class="text-bg">
        <p>Neben unseren günstigen Preisen in der Software-Entwicklung, transparenten Verträgen, hoher Flexibilität und klarer Kommunikation bieten wir Ihnen viel know how in verschiedenen Branchen und Geschäftsfunktionen. </p>
    </div>
    <div class="info-area"> <a href="#" class="btn btn-2">Learn more</a> </div>
</div>
<div class="large-pic container-fluid nopadding">
    <h2>Clients say about us</h2>
    <div class="slider-wrapper owl-carousel" id="home-slider">
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
        <div class="item">
            <div class="photo"><img class="img-responsive" src="public/images/pictures/photo.jpg" alt="Picture" /></div>
            <div class="photo-info">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                <h4>LONDON</h4> </div>
        </div>
    </div>
</div>
<div class="text-list">
    <div class="info-area">
        <h2>Hochqualifiziertes und motiviertes Fachpersonal</h2>
        <div class="list-post">
            <div class="im"> <img src="public/images/pictures/pic.jpg" alt="Picture" /> </div>
            <div class="desc">
                <ul>
                    <li>Wir verfügen über <strong>15 Jahre</strong>
                        <br/> Praxiserfahrung und Know how im agilen Projektmanagement, der Software Entwicklung, sowie im Recruiting und Beschaffung von IT-Fachkräften.</li>
                    <li>Die <strong>Ukraine</strong> und <strong>Rumänien</strong>
                        <br/>gehören in Osteuropa zu den führenden Nationen in der Informationstechnologie bezüglich der Größe des IT-Outsourcingmarktes und des IT-Talentpools.</li>
                    <li>Laut PwC gehört diese beiden Länder zu den 20 größten Exporteuren von IT-Dienstleistungen in der Welt. Mehr als <strong>70%</strong> aller Exporte der IT-Dienstleistungen sind Software-Entwicklung und Outsourcing-Dienstleistungen.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="forma-post bg">
    <div class="name-tit">
        <h2>Let's talk about | Software Outsourcing</h2></div>
    <div class="small-area">
        <p>Bitte füllen Sie dieses Formular aus, wenn Sie weitere Informationen benötigen. Wir treten schnellstmöglich mit Ihnen in Verbindung. </p>
    </div>
</div>
<div class="forma-indent">
    <form action="#">
        <div class="form-box">
            <div class="row-line">
                <input type="text" id="name3" placeholder="Name*" name="name3" />
            </div>
            <div class="row-line">
                <input type="email" id="email" placeholder="Email*" name="email" />
            </div>
            <div class="row-line">
                <input type="text" id="name4" class="mask" placeholder="Telefon*" name="name4" />
            </div>
            <div class="row-line">
                <select id="select" name="select">
                    <option>Select your topic</option>
                    <option>App Entwicklung</option>
                    <option>E-Commerce</option>
                    <option>Mobile &amp; Web</option>
                    <option>Grafik &amp; Design</option>
                    <option>QA &amp; Testing</option>
                    <option>BPO Services</option>
                    <option>Noch nicht bestimmt</option>
                </select>
            </div>
            <div class="row-line row-other">
                <textarea id="message" placeholder="Please, enter your Message here*" name="message"></textarea>
            </div>
        </div>
        <input class="wpcf7-submit wpcf7-submit-2" value="ABSENDEN" type="submit">
    </form>
    <div class="form-text">
        <p>Kontaktieren Sie uns jetzt per E-Mail, Telefon, WhatsApp oder Skype. Gerne stehen wir Ihnen auch per Live Support, sowie für ein persönliches Gespräch vor Ort zur Verfügung. </p>
    </div>
</div>
<div class="map-box bg">
    <div class="small-area">
        <h4>FIND US WORLDWIDE</h4>
        <div class="for-mob">
            <ul>
                <li><a href="germany">Germany</a></li>
                <li><a href="sw">Switzerlang</a></li>
                <li><a href="uk">United Kingdom</a></li>
                <li><a href="usa">USA</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="map-area">
    <div class="small-area">
        <div class="c-text germany">
            <p>Germany Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="c-text sw">
            <p>Switzerlang Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="c-text uk">
            <p>United Kingdom Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="c-text usa">
            <p>USA Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
    </div>
    <div class="map-im">
        <img src="public/images/pictures/world-high.svg" alt="Picture" />
        <div class="hover-img germany">
            <img src="public/images/pictures/world-high-ger.svg" alt="Picture" />
        </div>
        <div class="hover-img uk">
            <img src="public/images/pictures/world-high-uk.svg" alt="Picture" />
        </div>
        <div class="hover-img usa">
            <img src="public/images/pictures/world-high-usa.svg" alt="Picture" />
        </div>
        <div class="hover-img sw">
            <img src="public/images/pictures/world-high-sw.svg" alt="Picture" />
        </div>
        <a href="germany" class="map-link ger"></a>
        <a href="sw" class="map-link sw"></a>
        <a href="uk" class="map-link uk"></a>
        <a href="usa" class="map-link usa"></a>
        <a href="usa" class="map-link usa top"></a>
        <div class="t-box germany">
            <a href="#" class="m-close"><img src="public/images/icons/close.svg" alt="Close" /></a>
            <h2>GERMANY</h2><img src="public/images/pictures/photo-man.png" alt="Picture" />
            <div class="r-box">
                <h3>Sales Representative</h3>
                <p>Damian König
                    <br/> Mobil: 0163 - 89 611 89</p>
            </div>
            <div class="r-box">
                <h3>Kommunikation</h3>
                <p>Tel.: 0931 - 45 24 24 3
                    <br/> Skype: Clientsupport24</p>
            </div>
            <div class="r-box">
                <h3>E-Mail</h3>
                <p>Angebote: <a href="#">sales@bsbv.net <br/> Support: <a href="#">dev@bsbv.net</a></p>
            </div>
        </div>
        <div class="t-box sw">
            <a href="#" class="m-close"><img src="public/images/icons/close.svg" alt="Close" /></a>
            <h2>Switzerlang</h2><img src="public/images/pictures/photo-man.png" alt="Picture" />
            <div class="r-box">
                <h3>Sales Representative</h3>
                <p>Damian König
                    <br/> Mobil: 0163 - 89 611 89</p>
            </div>
            <div class="r-box">
                <h3>Kommunikation</h3>
                <p>Tel.: 0931 - 45 24 24 3
                    <br/> Skype: Clientsupport24</p>
            </div>
            <div class="r-box">
                <h3>E-Mail</h3>
                <p>Angebote: <a href="#">sales@bsbv.net <br/> Support: <a href="#">dev@bsbv.net</a></p>
            </div>
        </div>
        <div class="t-box uk">
            <a href="#" class="m-close"><img src="public/images/icons/close.svg" alt="Close" /></a>
            <h2>United Kingdom</h2><img src="public/images/pictures/photo-man.png" alt="Picture" />
            <div class="r-box">
                <h3>Sales Representative</h3>
                <p>Damian König
                    <br/> Mobil: 0163 - 89 611 89</p>
            </div>
            <div class="r-box">
                <h3>Kommunikation</h3>
                <p>Tel.: 0931 - 45 24 24 3
                    <br/> Skype: Clientsupport24</p>
            </div>
            <div class="r-box">
                <h3>E-Mail</h3>
                <p>Angebote: <a href="#">sales@bsbv.net <br/> Support: <a href="#">dev@bsbv.net</a></p>
            </div>
        </div>
        <div class="t-box usa">
            <a href="#" class="m-close"><img src="public/images/icons/close.svg" alt="Close" /></a>
            <h2>USA</h2><img src="public/images/pictures/photo-man.png" alt="Picture" />
            <div class="r-box">
                <h3>Sales Representative</h3>
                <p>Damian König
                    <br/> Mobil: 0163 - 89 611 89</p>
            </div>
            <div class="r-box">
                <h3>Kommunikation</h3>
                <p>Tel.: 0931 - 45 24 24 3
                    <br/> Skype: Clientsupport24</p>
            </div>
            <div class="r-box">
                <h3>E-Mail</h3>
                <p>Angebote: <a href="#">sales@bsbv.net <br/> Support: <a href="#">dev@bsbv.net</a></p>
            </div>
        </div>
    </div>
</div>
@endsection