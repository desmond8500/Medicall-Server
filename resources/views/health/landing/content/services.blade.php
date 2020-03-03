@php
    $services[] = array(
        'title' => "Soins à domicile",
        'description' => "L’aide-soignant à domicile dispense, sous la responsabilité et l’encadrement d’un infirmier, des soins visant à répondre aux besoins d’entretien de la personne âgée et à compenser une diminution de son autonomie. Elle intervient dans le cadre d’un service de soins infirmiers à domicile ou dans le cadre d’une hospitalisation à domicile.",
        'icon'=>'fa-heart');
    $services[] = array(
        'title' => "Hospitalisation à domicile",
        'description' => "L’hospitalisation à domicile est la formule de soins à domicile représentant le niveau d’intervention le plus élevé. Elle est préconisée pour des malades atteints de pathologies graves, aiguës ou chroniques et permet de délivrer des actes médicaux comparables à ceux pratiqués à l’hôpital.",
        'icon'=>'fa-heart');
    $services[] = array(
        'title' => "Télémédecine",
        'description' => "Nous proposons de prodiguer des soins à une personne qui se trouve dans des zones reculées du pays par un infirmier avec l'assistance d'un medecin. ",
        'icon'=>'fa-heart');
    $services[] = array(
        'title' => "Assistance Digitale",
        'description' => "Nous mettons à la disposition de nos utilisteurs une application mobile qui les assiste dans la prise de contact et le suivi suivi médical.",
        'icon'=>'fa-heart');
    $services[] = array(
        'title' => "Sensibilisation",
        'description' => "Nous publions régulèrement des informations sur la santé. C'est des conseils et des astuces liées aux réalités sociales actuelles.",
        'icon'=>'fa-heart');
@endphp

<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Nos services</h2>
    </div>
    @foreach ($services as $service)
        <div class="col-md-3">
            <div class="services container bg-light">
                <h4>
                    <i class="fa {{ $service['icon'] }} serviceicon"></i>
                    {{ $service['title'] }}
                </h4>
                <p>
                    {{ $service['description'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>
