<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Afficher la liste des albums de l'utilisateur authentifié.
     */
    public function index()
    {
        $albums = Album::all() ;
        return Inertia::render('Albums/Index', [
            'albums' => $albums,
        ]);
    }

    /**
     * Afficher le formulaire de création d'un nouvel album.
     */
    public function create()
    {
        return Inertia::render('Albums/Create');
    }

    /**
     * Stocker un nouvel album dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'is_private' => 'boolean',
        ]);

        Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'is_private' => $request->is_private ?? false
        ]);

        return redirect()->route('albums.index')->with('success', 'Album créé avec succès!');
    }

    /**
     * Afficher un album avec ses photos.
     */
    public function show($id)
    {
        $album = Album::with('photos')->findOrFail($id); // Récupère l'album et ses photos
        return Inertia::render('Albums/Show', [
            'album' => $album,
        ]);
    }

    /**
     * Afficher le formulaire d'édition d'un album.
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        return Inertia::render('Albums/Edit', [
            'album' => $album,
        ]);
    }

    /**
     * Mettre à jour un album dans la base de données.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $album = Album::findOrFail($id);
        $album->title = $request->title;
        $album->description = $request->description;
        $album->save();

        return redirect()->route('albums.index')->with('success', 'Album mis à jour avec succès!');
    }

    /**
     * Supprimer un album de la base de données.
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete(); // Supprime l'album et ses photos associées si vous le souhaitez

        return redirect()->route('albums.index')->with('success', 'Album supprimé avec succès!');
    }
}
