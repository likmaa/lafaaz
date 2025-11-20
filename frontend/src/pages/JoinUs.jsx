import React from 'react';
import Breadcrumb from '../components/ui/Breadcrumb';
import { Link } from 'react-router-dom';

export default function JoinUs() {
  return (
    <div className="container mx-auto px-4 py-12">
      <Breadcrumb items={[{label:'Accueil', to:'/'},{label:'Nous rejoindre'}]} />
      <h1 className="text-3xl md:text-4xl font-bold mb-6">Nous rejoindre</h1>
      <p className="text-gray-600 max-w-3xl mb-10">Plusieurs manières de contribuer : emploi, bénévolat, stage, don ponctuel ou récurrent, ambassadeur local. Cette page regroupera des formulaires dynamiques et des liens vers les différentes sections.</p>
      <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        {[
          {title:'Offres d\'emploi', to:'/jobs', text:'Postes permanents & missions techniques.'},
          {title:'Bénévolat', to:'/volunteering', text:'Actions terrain & appui logistique.'},
          {title:'Stages', to:'/internships', text:'Formations pratiques encadrées.'},
          {title:'Faire un don', to:'/donate', text:'Soutenir financièrement un projet.'},
          {title:'Devenir ambassadeur', to:'#', text:'Porter nos actions dans votre communauté.'},
          {title:'Proposer un partenariat', to:'#', text:'Co-construire un projet à impact.'},
        ].map((b,i)=>(
          <Link key={i} to={b.to} className="group border rounded-lg p-6 bg-white hover:shadow-sm transition">
            <h3 className="font-semibold text-lg mb-2 text-gray-800 group-hover:text-primary-700">{b.title}</h3>
            <p className="text-sm text-gray-600">{b.text}</p>
            <span className="mt-3 inline-block text-xs font-medium text-primary-600">Explorer →</span>
          </Link>
        ))}
      </div>
    </div>
  );
}
