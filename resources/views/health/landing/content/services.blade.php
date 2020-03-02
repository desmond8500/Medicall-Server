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
        'title' => "Assistance",
        'description' => "Les missions de l’infirmier à domicile sont multiples.  Il assure, sur prescription médicale, certains soins infirmiers et d’hygiène générale, veille au suivi thérapeutique et à l’administration des traitements, suit l’état de santé, aide au maintien de l’autonomie et peut intervenir pour l’accomplissement  de formalités liées aux soins.",
        'icon'=>'fa-heart');
    $services[] = array(
        'title' => "Assistance",
        'description' => "Les missions de l’infirmier à domicile sont multiples.  Il assure, sur prescription médicale, certains soins infirmiers et d’hygiène générale, veille au suivi thérapeutique et à l’administration des traitements, suit l’état de santé, aide au maintien de l’autonomie et peut intervenir pour l’accomplissement  de formalités liées aux soins.",
        'icon'=>'fa-heart');
@endphp

<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Nos services</h2>
    </div>
    @foreach ($services as $service)
        <div class="col-md-4 text-center">
            <h4>
                <i class="fa {{ $service['icon'] }}"></i>
                {{ $service['title'] }}
            </h4>
            <p>
                {{ $service['title'] }}
            </p>
        </div>
    @endforeach
</div>
