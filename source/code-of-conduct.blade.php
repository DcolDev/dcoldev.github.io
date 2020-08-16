@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Charte Code de Conduite Contributeurs</h1>

    <h2>Notre engagement</h2>

    {{-- <img src="/assets/img/about.png" alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">
    --}}

    <p class="mb-6">
        Dans l'intérêt de favoriser un environnement ouvert et accueillant, nous nous
        engageons, en tant que responsables et en tant que personnes contribuant à ce
        projet, à faire de la participation une expérience exempte de harcèlement pour
        tout le monde, quel que soit le niveau d'expérience, le sexe, l'identité ou
        l'expression de genre, l'orientation sexuelle, le handicap, l'apparence
        personnelle, la taille physique, l'origine ethnique, l'âge, la religion ou la
        nationalité.
    </p>

    <h2>Nos critères</h2>

    <p class="mb-6">
        Exemples de comportements qui contribuent à créer un environnement positif :

    <ul class="pl-8">
        <li>l'utilisation d'un langage ouvert et accueillant</li>
        <li>le respect des différents points de vue et expériences vécues</li>
        <li>accepter poliment les critiques constructives</li>
        <li>se concentrer sur ce qui est meilleur pour la communauté</li>
        <li>faire preuve d'empathie envers les autres membres de la communauté</li>
    </ul>
    </p>

    <p class="mb-6">
        Exemples de comportements non acceptables :

    <ul class="pl-8">
        <li>l'utilisation de langage ou d'imagerie sexualisés et les avances sexuelles non sollicitées</li>
        <li>le trolling, les commentaires insultants ou désobligeants, et les attaques personnelles ou d'ordre politique
        </li>
        <li>le harcèlement en public ou en privé</li>
        <li>la publication d'informations privées de tierces personnes, telles que des adresses physiques ou électroniques,
            sans permission explicite</li>
        <li>toute conduite qui pourrait être raisonnablement considérée comme inappropriée dans le milieu professionnel</li>
    </ul>

    </p>

    <h2>Nos responsabilités</h2>

    <p class="mb-6">
        Les responsables du projet doivent clarifier les critères de comportement
        acceptables de ce projet : il est attendu que ces personnes prennent les
        mesures correctives justes comme réponse à tout comportement inacceptable.
    </p>
    <p class="mb-6">
        Les personnes qui assurent la maintenance du projet ont le droit et la
        responsabilité de supprimer, modifier ou rejeter les commentaires, _commits_,
        code, modifications du wiki, questions et autres contributions qui ne respectent
        pas ce Code de Conduite, ou de bannir temporairement ou définitivement
        quiconque, suite à des comportements jugés inappropriés, menaçants, injurieux,
        ou nuisibles
    </p>

    <h2>Objectifs</h2>

    <p class="mb-6">
        Ce Code de Conduite s'applique à la fois au sein des espaces du projet ainsi que
        dans les espaces publics lorsqu'un individu représente le projet ou sa
        communauté. Font parties des exemples de représentation d'un projet ou d'une
        communauté le fait d'utiliser une adresse email propre au projet, de poster sur
        les réseaux sociaux avec un compte officiel, ou d'intervenir pour représenter le
        projet au cours d'un événement en-ligne ou hors-ligne. La représentation du
        projet pourra être autrement définie et clarifiée par les responsables du
        projet.
    </p>

    <h2>Application</h2>

    <p class="mb-6">
        Les cas de comportements abusifs, harcelants ou tout autre comportement
        inacceptable peuvent être signalés en contactant l'équipe du projet à
        <code>hey@dcol.dev</code>. Toutes les plaintes seront examinées et étudiées
        et se traduiront par une réponse appropriée aux
        circonstances. L'équipe du projet s'engage à garder confidentielles les
        informations de la personne qui remonte un incident. Plus de détails sur
        la politique de mise en application des règles peuvent être publiés séparément.

        Les membres du projet qui ne suivent ou qui n'appliquent pas le Code de
        Conduite de bonne foi s'exposent temporairement ou de façon permanente à des
        répercussions définies par d'autres membres de la direction du projet.
    </p>

    <h2>Directives d'Impact</h2>

    Les dirigeants de la communauté suivront ces directives d'impact sur la communauté pour déterminer les conséquences de
    toute action qu'ils jugent contraire à ce code de conduite:

    <h3 class="font-semibold">1. Correction</h3>

    <p class="mb-6">
        <span class="font-semibold">Impact sur la communauté:</span> utilisation d'un langage inapproprié ou d'un autre
        comportement jugé non professionnel ou indésirable dans la communauté.
    </p>
    <p class="mb-6">
        <span class="font-semibold">Conséquence:</span> un avertissement écrit et privé des dirigeants de la communauté,
        fournissant des éclaircissements sur la nature de la violation et une explication des raisons pour lesquelles le
        comportement était inapproprié. Des excuses
        publiques peuvent être demandées.
    </p>

    <h3 class="font-semibold">2. Avertissement</h3>

    <p class="mb-6">
        <span class="font-semibold">Impact sur la communauté:</span> une violation par un seul incident ou une série
        d'actions.
    </p>
    <p class="mb-6">
        <span class="font-semibold">Conséquence:</span> un avertissement avec des conséquences pour le comportement continu.
        Aucune interaction avec les personnes
        impliquées, y compris une interaction non sollicitée avec ceux qui appliquent le Code de conduite, pendant une
        période
        de temps spécifiée. Cela inclut d'éviter les interactions dans les espaces communautaires ainsi que sur les canaux
        externes comme les médias sociaux. La violation de ces conditions peut entraîner une interdiction temporaire ou
        permanente.
    </p>

    <h3 class="font-semibold">3. Interdiction temporaire</h3>

    <p class="mb-6">
        <span class="font-semibold">Impact sur la communauté:</span> une violation grave des normes communautaires, y
        compris un comportement inapproprié durable.
    </p>
    <p class="mb-6">
        <span class="font-semibold">Conséquence:</span> une interdiction temporaire de toute sorte d'interaction ou de
        communication publique avec la communauté
        pendant une période de temps spécifiée. Aucune interaction publique ou privée avec les personnes impliquées, y
        compris
        les interactions non sollicitées avec ceux qui appliquent le Code de conduite, n'est autorisée pendant cette
        période. La
        violation de ces conditions peut entraîner une interdiction permanente.
    </p>

    <h3 class="font-semibold">4. Interdiction permanente</h3>

    <p class="mb-6">
        <span class="font-semibold">Impact sur la communauté:</span> Démontrer un modèle de violation des normes de la
        communauté, y compris un comportement
        inapproprié soutenu, le harcèlement d'une personne, ou l'agression ou le dénigrement de catégories d'individus.
    </p>
    <p class="mb-6">
        <span class="font-semibold">Conséquence:</span> une interdiction permanente de toute sorte d'interaction publique au
        sein de la communauté.
    </p>

    <h2>Attribution</h2>

    <p class="mb-6">
        Ce Code de Conduite est adapté du <a href="https://www.contributor-covenant.org">Contributor Covenant</a> version
        2.0, disponible à
        <a
            href="https://www.contributor-covenant.org/fr/version/1/4/code-of-conduct">https://www.contributor-covenant.org/fr/version/1/4/code-of-conduct</a>
    </p>
    <p class="mb-6">
        Les lignes directrices sur l'impact communautaire ont été inspirées par <a href="https://github.com/mozilla/diversity">Mozilla’s code of conduct enforcement ladder</a>
    </p>
    <p class="mb-6">
        Pour obtenir des réponses aux questions courantes sur ce code de conduite, consultez la FAQ sur <a
        href="https://www.contributor-covenant.org/faq">https://www.contributor-covenant.org/faq</a>. 
        Les traductions sont disponibles sur <a
        href="https://www.contributor-covenant.org/translations">https://www.contributor-covenant.org/translations</a>.
    </p>


@endsection
