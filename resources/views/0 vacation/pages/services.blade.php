@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
    @include('0 vacation.section.call_to_action2',['title'=>'Services' , 'image'=>'src/images/wallpaper/services.jpg'])
<section class="container">
    <h3>Soins généraux</h3>

    Medicall propose des prestations sur mesure adaptées à vos besoins, notamment :
    <ul>
        <li>Injections : intramusculaires, intradermiques, vaccinations, etc.</li>
        <li>Perfusions : traitement du paludisme, traitement de la drépanocytose, traitements médicamenteux, hydratation, etc.</li>
        <li>Pansements : plaies, brulés, etc.</li>
        <li>Surveillances : tension, diabète, éducation (conseils).</li>
    </ul>

    <h3>Prise en charge spécifique</h3>

    Cette prise en charge s’adresse aux personnes dépendantes qui, de manière temporaire ou définitive, ont besoin d’assistance pour les actes de la vie quotidienne. Elle comprend :
    <ul>
        <li>Une prise en charge en binôme : infirmier + aide-infirmier.</li>
        <li>Une aide à la toilette, réfection du lit.</li>
        <li>Une prévention d’escarres : massages, changements de position et prévention de positions vicieuses.</li>
        <li>Une préparation et administration des traitements.</li>
        <li>Une feuille de suivi personnalisée des soins journaliers (traçabilité des soins).</li>
    </ul>

    <h3>Prélèvements</h3>

    Medicall propose, sur prescription médicale, des prélèvements sanguins, urinaires, etc. en collaboration avec le laboratoire Sunulabo. Les résultats sont disponibles sous 24h.

</section>
@endsection

@section('script')

@endsection
