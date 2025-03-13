<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Feedback;
use App\Mail\ContactMail;
use App\Models\SkillItem;
use App\Models\Experience;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use App\Models\BlogSectionSetting;
use App\Models\SkillSectionSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSectionSetting;
use App\Models\FeedbackSectionSetting;
use App\Models\PortfolioSectionSetting;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::latest()->take(6)->get();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skill = SkillSectionSetting::first();
        $skillItems = SkillItem::all();
        $experiences = Experience::all();
        $feedbacks = Feedback::all();
        $feedbackTitle = FeedbackSectionSetting::first();
        $blogs = Blog::latest()->take(5)->get();
        $blogTitle = BlogSectionSetting::first();
        $contactTitle = ContactSectionSetting::first();
        return view('frontend.pages.home' , compact('hero', 'typerTitles', 'services', 'about', 'portfolioTitle', 'portfolioCategories', 'portfolioItems', 'skill', 'skillItems', 'experiences', 'feedbacks', 'feedbackTitle', 'blogs', 'blogTitle', 'contactTitle' ) );
    }


    public function showPortfolio($id){
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.pages.portfolio-details', compact('portfolio'));
    }

    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $previousPost = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $nextPost = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        return view('frontend.pages.blog-details', compact('blog', 'previousPost', 'nextPost'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function portfolio()
    {
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::latest()->get();
        return view('frontend.pages.portfolio', compact('portfolioCategories', 'portfolioItems'));
    }

    public function contact(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'max:200'],
                'subject' => ['required', 'max:300'],
                'email' => ['required', 'email'],
                'message' => ['required', 'max:2000'],
            ]);
    
            // Ajout de logs pour le debugging
            \Log::info('Tentative d\'envoi de mail', $request->all());
    
            Mail::send(new ContactMail($request->all()));
    
            return response()->json([
                'status' => 'success',
                'message' => 'Message envoyé avec succès!'
            ]);
    
        } catch (\Exception $e) {
            \Log::error('Erreur d\'envoi de mail : ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur lors de l\'envoi : ' . $e->getMessage()
            ], 500);
        }
    }

    public function faq()
{
    return view('frontend.pages.faq');
}

public function privacyPolicy()
{
    return view('frontend.pages.privacy-policy');
}

public function termsOfService()
{
    return view('frontend.pages.terms-of-service');
}
public function technicalSupport()
{
    return view('frontend.pages.technical-support');
}

// Dans HomeController.php
public function submitSupport(Request $request)
{
    // Valider les données
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string'
    ]);

    // Traiter le formulaire (envoyer un email, sauvegarder en DB, etc.)
    // ...

    return back()->with('success', 'Votre demande de support a été envoyée avec succès.');
}
}
