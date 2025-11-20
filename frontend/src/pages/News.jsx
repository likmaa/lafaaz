import React from 'react';
import { useQuery } from '@tanstack/react-query';
import api from '../services/api';
import NewsCard from '../components/ui/NewsCard';
import Loading from '../components/ui/Loading';

export default function News() {
  const { data, isLoading } = useQuery({
    queryKey: ['news'],
    queryFn: async () => (await api.get('/actualites')).data
  });

  return (
    <div>
      {/* Header */}
      <div className="mb-8">
        <h1 className="text-4xl font-bold mb-4">Actualités</h1>
        <div className="w-20 h-1 bg-primary-600 mb-4"></div>
        <p className="text-gray-600 max-w-2xl">
          Restez informé de nos dernières actualités, événements et réalisations.
        </p>
      </div>

      {/* News list */}
      {isLoading ? (
        <Loading text="Chargement des actualités..." />
      ) : data?.data?.length > 0 ? (
        <div className="grid md:grid-cols-3 gap-6">
          {data.data.map(a => <NewsCard key={a.id} news={a} />)}
        </div>
      ) : (
        <div className="text-center py-12 bg-gray-50 rounded-lg">
          <p className="text-gray-500">Aucune actualité disponible pour le moment.</p>
        </div>
      )}
    </div>
  );
}
