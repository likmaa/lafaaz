import React from 'react';
import Loading from '../ui/Loading';
import { useQuery } from '@tanstack/react-query';
import api from '../../services/api';
import SectionHeader from '../ui/SectionHeader';

export default function TestimonialsSection() {
  const { data, isLoading } = useQuery({
    queryKey: ['home-temoignages'],
    queryFn: async () => (await api.get('/temoignages?limit=6')).data,
    staleTime: 1000 * 60
  });

  return (
    <section className="py-16 bg-white">
      <div className="container mx-auto px-4">
        <SectionHeader
          title="Ils nous soutiennent"
          align="center"
          subtitle="Donateurs & partenaires partagent leur motivation. Les contributions seront rendues dynamiques."
        />
        {isLoading ? (
          <Loading text="Chargement des témoignages..." />
        ) : data?.data?.length > 0 ? (
          <div className="grid md:grid-cols-3 gap-6">
            {data.data.map(t => (
              <div key={t.id} className="bg-gray-50 rounded-lg p-6 border hover:shadow-md transition group">
                <div className="flex items-center gap-3 mb-4">
                  <div className="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 font-bold text-xl">
                    {(t.nom || 'A')[0].toUpperCase()}
                  </div>
                  <div>
                    <p className="font-semibold text-gray-800">{t.nom || 'Anonyme'}</p>
                    {t.montant && <p className="text-sm text-primary-600 font-medium">{t.montant} FCFA</p>}
                  </div>
                </div>
                <p className="text-gray-600 italic text-sm group-hover:text-textprimary">"{t.message || 'Merci pour votre soutien.'}"</p>
              </div>
            ))}
          </div>
        ) : (
          <p className="text-center text-gray-500 py-8">Aucun témoignage disponible pour le moment.</p>
        )}
      </div>
    </section>
  );
}
