import React from 'react';
import { useParams, Link } from 'react-router-dom';
import { useQuery } from '@tanstack/react-query';
import api from '../services/api';
import Loading from '../components/ui/Loading';

export default function NewsDetail() {
  const { id } = useParams();
  
  const { data: news, isLoading, error } = useQuery({
    queryKey: ['news', id],
    queryFn: async () => (await api.get(`/actualites/${id}`)).data,
    enabled: !!id
  });

  const { data: relatedNews } = useQuery({
    queryKey: ['related-news'],
    queryFn: async () => (await api.get('/actualites?limit=4')).data
  });

  if (isLoading) return <Loading text="Chargement de l'actualité..." />;
  
  if (error) {
    return (
      <div className="text-center py-12">
        <h2 className="text-2xl font-bold text-gray-900 mb-4">Actualité introuvable</h2>
        <p className="text-gray-600 mb-6">L'actualité demandée n'existe pas ou a été supprimée.</p>
        <Link to="/news" className="text-primary-600 hover:text-primary-700 font-medium">
          ← Retour aux actualités
        </Link>
      </div>
    );
  }

  const article = news?.data || news;
  
  const formatDate = (date) => {
    if (!date) return '';
    return new Date(date).toLocaleDateString('fr-FR', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
  };

  // Navigation prev/next (si disponible dans l'API)
  const prevArticle = news?.previous;
  const nextArticle = news?.next;

  return (
    <div className="max-w-4xl mx-auto">
      {/* Breadcrumb */}
      <nav className="mb-6 text-sm text-gray-500">
        <Link to="/" className="hover:text-primary-600">Accueil</Link>
        <span className="mx-2">/</span>
        <Link to="/news" className="hover:text-primary-600">Actualités</Link>
        <span className="mx-2">/</span>
        <span className="text-gray-900">{article.titre || article.title}</span>
      </nav>

      {/* Article header */}
      <article>
        <header className="mb-8">
          {article.categorie && (
            <span className="inline-block bg-primary-100 text-primary-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              {article.categorie}
            </span>
          )}
          <h1 className="text-4xl font-bold mb-4">{article.titre || article.title || 'Actualité sans titre'}</h1>
          <div className="flex items-center gap-4 text-sm text-gray-600">
            <span>{formatDate(article.created_at)}</span>
            {article.auteur && (
              <>
                <span>•</span>
                <span>Par {article.auteur}</span>
              </>
            )}
          </div>
        </header>

        {/* Image principale */}
        {article.image || article.photo ? (
          <div className="aspect-video bg-gray-200 rounded-lg overflow-hidden mb-8">
            <img src={article.image || article.photo} alt={article.titre || article.title} className="w-full h-full object-cover" />
          </div>
        ) : null}

        {/* Contenu */}
        <div className="prose max-w-none mb-12">
          <div className="text-gray-700 whitespace-pre-line leading-relaxed text-justify">
            {article.contenu || article.body || 'Aucun contenu disponible.'}
          </div>
        </div>

        {/* Tags */}
        {article.tags && article.tags.length > 0 && (
          <div className="flex flex-wrap gap-2 mb-8">
            {article.tags.map((tag, idx) => (
              <span key={idx} className="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                #{tag}
              </span>
            ))}
          </div>
        )}
      </article>

      {/* Navigation prev/next */}
      {(prevArticle || nextArticle) && (
        <div className="flex items-center justify-between py-8 border-t border-b mb-12">
          {prevArticle ? (
            <Link to={`/news/${prevArticle.id}`} className="flex items-center gap-2 text-primary-600 hover:text-primary-700">
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 19l-7-7 7-7" />
              </svg>
              <div className="text-left">
                <div className="text-xs text-gray-500">Article précédent</div>
                <div className="font-medium truncate max-w-xs">{prevArticle.titre || prevArticle.title}</div>
              </div>
            </Link>
          ) : <div />}
          
          {nextArticle ? (
            <Link to={`/news/${nextArticle.id}`} className="flex items-center gap-2 text-primary-600 hover:text-primary-700">
              <div className="text-right">
                <div className="text-xs text-gray-500">Article suivant</div>
                <div className="font-medium truncate max-w-xs">{nextArticle.titre || nextArticle.title}</div>
              </div>
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </Link>
          ) : <div />}
        </div>
      )}

      {/* Articles similaires */}
      {relatedNews?.data?.length > 0 && (
        <div className="mt-12">
          <h2 className="text-2xl font-bold mb-6">Autres actualités</h2>
          <div className="grid md:grid-cols-2 gap-6">
            {relatedNews.data.filter(a => a.id !== article.id).slice(0, 3).map(a => (
              <Link key={a.id} to={`/news/${a.id}`} className="group">
                <div className="border rounded-lg overflow-hidden hover:shadow-md transition">
                  {a.image || a.photo ? (
                    <div className="aspect-video bg-gray-200">
                      <img src={a.image || a.photo} alt={a.titre || a.title} className="w-full h-full object-cover group-hover:scale-105 transition" />
                    </div>
                  ) : null}
                  <div className="p-4">
                    <h3 className="font-semibold mb-2 group-hover:text-primary-600 transition">{a.titre || a.title}</h3>
                    <p className="text-sm text-gray-600 line-clamp-2">{a.contenu || a.body}</p>
                  </div>
                </div>
              </Link>
            ))}
          </div>
        </div>
      )}
    </div>
  );
}
