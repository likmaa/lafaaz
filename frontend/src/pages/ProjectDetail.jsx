import React from 'react';
import { useParams, Link } from 'react-router-dom';
import { useQuery } from '@tanstack/react-query';
import api from '../services/api';
import Loading from '../components/ui/Loading';
import Button from '../components/ui/Button';

export default function ProjectDetail() {
  const { id } = useParams();
  
  const { data: project, isLoading, error } = useQuery({
    queryKey: ['project', id],
    queryFn: async () => (await api.get(`/projets/${id}`)).data,
    enabled: !!id
  });

  const { data: relatedProjects } = useQuery({
    queryKey: ['related-projects'],
    queryFn: async () => (await api.get('/projets?limit=3')).data
  });

  if (isLoading) return <Loading text="Chargement du projet..." />;
  
  if (error) {
    return (
      <div className="text-center py-12">
        <h2 className="text-2xl font-bold text-gray-900 mb-4">Projet introuvable</h2>
        <p className="text-gray-600 mb-6">Le projet demandé n'existe pas ou a été supprimé.</p>
        <Link to="/projects" className="text-primary-600 hover:text-primary-700 font-medium">
          ← Retour aux projets
        </Link>
      </div>
    );
  }

  const proj = project?.data || project;

  return (
    <div className="max-w-4xl mx-auto">
      {/* Breadcrumb */}
      <nav className="mb-6 text-sm text-gray-500">
        <Link to="/" className="hover:text-primary-600">Accueil</Link>
        <span className="mx-2">/</span>
        <Link to="/projects" className="hover:text-primary-600">Projets</Link>
        <span className="mx-2">/</span>
        <span className="text-gray-900">{proj.titre || proj.name}</span>
      </nav>

      {/* Image principale */}
      {proj.image || proj.photo ? (
        <div className="aspect-video bg-gray-200 rounded-lg overflow-hidden mb-6">
          <img src={proj.image || proj.photo} alt={proj.titre || proj.name} className="w-full h-full object-cover" />
        </div>
      ) : null}

      {/* Titre et meta */}
      <div className="mb-6">
        <h1 className="text-4xl font-bold mb-4">{proj.titre || proj.name || 'Projet sans titre'}</h1>
        <div className="flex flex-wrap gap-4 text-sm text-gray-600">
          {proj.created_at && (
            <span>Créé le {new Date(proj.created_at).toLocaleDateString('fr-FR')}</span>
          )}
          {proj.localisation && <span>📍 {proj.localisation}</span>}
          {proj.statut && (
            <span className={`px-2 py-1 rounded text-xs font-medium ${
              proj.statut === 'actif' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700'
            }`}>
              {proj.statut}
            </span>
          )}
        </div>
      </div>

      {/* Objectif de financement */}
      {proj.montant_cible && (
        <div className="bg-primary-50 border border-primary-200 rounded-lg p-6 mb-8">
          <div className="flex items-center justify-between mb-3">
            <span className="text-sm font-medium text-gray-700">Objectif de financement</span>
            <span className="text-2xl font-bold text-primary-600">{proj.montant_cible} FCFA</span>
          </div>
          {proj.montant_collecte && (
            <>
              <div className="w-full bg-gray-200 rounded-full h-3 mb-2">
                <div 
                  className="bg-primary-600 h-3 rounded-full transition-all"
                  style={{ width: `${Math.min((proj.montant_collecte / proj.montant_cible) * 100, 100)}%` }}
                />
              </div>
              <p className="text-sm text-gray-600">
                {proj.montant_collecte} FCFA collectés ({Math.round((proj.montant_collecte / proj.montant_cible) * 100)}%)
              </p>
            </>
          )}
          <div className="mt-4">
            <Link to={`/donate/project/${proj.id}`}>
              <Button className="w-full">Soutenir ce projet</Button>
            </Link>
          </div>
        </div>
      )}

      {/* Description */}
      <div className="prose max-w-none mb-8">
        <h2 className="text-2xl font-bold mb-4">Description du projet</h2>
        <div className="text-gray-700 whitespace-pre-line leading-relaxed">
          {proj.description || 'Aucune description disponible.'}
        </div>
      </div>

      {/* Objectifs */}
      {proj.objectifs && (
        <div className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Objectifs</h2>
          <div className="bg-gray-50 rounded-lg p-6">
            <p className="text-gray-700 whitespace-pre-line">{proj.objectifs}</p>
          </div>
        </div>
      )}

      {/* Projets similaires */}
      {relatedProjects?.data?.length > 0 && (
        <div className="mt-12 pt-8 border-t">
          <h2 className="text-2xl font-bold mb-6">Autres projets</h2>
          <div className="grid md:grid-cols-3 gap-4">
            {relatedProjects.data.filter(p => p.id !== proj.id).slice(0, 3).map(p => (
              <Link key={p.id} to={`/projects/${p.id}`} className="border rounded-lg p-4 hover:shadow-md transition">
                <h3 className="font-semibold mb-2 truncate">{p.titre || p.name}</h3>
                <p className="text-sm text-gray-600 line-clamp-2">{p.description}</p>
              </Link>
            ))}
          </div>
        </div>
      )}
    </div>
  );
}
