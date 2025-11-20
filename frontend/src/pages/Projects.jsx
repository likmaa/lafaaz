import React from 'react';
import { useQuery } from '@tanstack/react-query';
import api from '../services/api';
import ProjectCard from '../components/ui/ProjectCard';
import Loading from '../components/ui/Loading';

export default function Projects() {
  const { data, isLoading } = useQuery({
    queryKey: ['projects'],
    queryFn: async () => (await api.get('/projets')).data
  });

  return (
    <div>
      {/* Header */}
      <div className="mb-8">
        <h1 className="text-4xl font-bold mb-4">Nos projets</h1>
        <div className="w-20 h-1 bg-primary-600 mb-4"></div>
        <p className="text-gray-600 max-w-2xl">
          Découvrez tous nos projets à impact social et choisissez celui que vous souhaitez soutenir.
        </p>
      </div>

      {/* Projects grid */}
      {isLoading ? (
        <Loading text="Chargement des projets..." />
      ) : data?.data?.length > 0 ? (
        <div className="grid md:grid-cols-3 gap-6">
          {data.data.map(p => <ProjectCard key={p.id} project={p} />)}
        </div>
      ) : (
        <div className="text-center py-12 bg-gray-50 rounded-lg">
          <p className="text-gray-500">Aucun projet disponible pour le moment.</p>
        </div>
      )}
    </div>
  );
}
