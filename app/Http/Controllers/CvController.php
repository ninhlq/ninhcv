<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Portfolio;
use App\Repositories\Contracts\ResumeRepositoryInterface;
use App\Resume;
use App\Cv;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;use function Symfony\Component\String\u;

class CvController extends Controller
{
    protected $resumeRepository;
    public function __construct(ResumeRepositoryInterface $resumeRepository)
    {
        $this->resumeRepository = $resumeRepository;
    }

    public function index()
    {
        $cvs = Cv::all();
        return view('admin/cv/index', compact('cvs'));
    }

    public function cv()
    {
        $cvs=Cv::all();
        $resumes = $this->resumeRepository->all();
        $portfolios = Portfolio::all();
        $blogs = Blog::all();
        $contacts = Contact::all();
        return view('index', compact('cvs','resumes', 'portfolios', 'blogs', 'contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $cv = new Cv();
        $cv->name = $request->get('name');
        $cv->age = $request->get('age');
        $cv->description = $request->get('description');
        $cv->address = $request->get('address');
        $cv->email = $request->get('email');
        $cv->experience = $request->get('experience');
        $cv->phone = $request->get('phone');
        $cv->html_css = $request->get('html_css');
        $cv->php = $request->get('php');
        $cv->laravel = $request->get('laravel');
        $cv->wordpress = $request->get('wordpress');
        $cv->skill1 = $request->get('skill1');
        $cv->skill2 = $request->get('skill2');
        $cv->skill3 = $request->get('skill3');
        $cv->skill4 = $request->get('skill4');
        $cv->design = $request->get('design');
        $cv->themes = $request->get('themes');
        $cv->user_experience = $request->get('user_experience');
        $cv->support = $request->get('support');
        $cv->company = $request->get('company');
        $cv->introduce = $request->get('introduce');
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $path = $avatar->getClientOriginalExtension();
            $name = time() . "." . $path;
            $avatar->move('avatar', $name);
            $cv->avatar = $name;
        }
        $cv->save();

        return redirect()->route ('index')->with('cv');
    }

    public function resume()
    {
        return view('resume');
    }

    public function add(Request $request)
    {
        $resume = $this->resumeRepository;
        $resume->facebook = $request->get('facebook');
        $resume->google = $request->get('google');
        $resume->abc = $request->get('abc');
        $resume->university = $request->get('university');
        $resume->specialization = $request->get('specialization');
        $resume->high = $request->get('high');
        $resume->manager = $request->get('manager');
        $resume->designer = $request->get('designer');
        $resume->save();
        return redirect()->route('index');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function ad(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->project = $request->get('project');
        $portfolio->save();
        return redirect()->route('index');
    }

    public function blog()
    {
        return view('blog');
    }

    public function ass(Request $request)
    {
        $blog = new Blog();
        $blog->original =$request->get('original');
        $blog->popular =$request->get('popular');
        $blog->everyone =$request->get('everyone');
        $blog->save();
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $cv_detail = Cv::findorfail($id);
       return view('admin.cv.edit',  compact('cv_detail'));
    }

    public function save(Request $request, $id)
    {
        $cv = Cv::find($id);
        $cv->name = $request->get('name');
        $cv->age = $request->get('age');
        $cv->description = $request->get('description');
        $cv->address = $request->get('address');
        $cv->email = $request->get('email');
        $cv->experience = $request->get('experience');
        $cv->phone = $request->get('phone');

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $path = $avatar->getClientOriginalExtension();
            $name = time() . "." . $path;
            $avatar->move('avatar', $name);
            $cv->avatar = $name;
        }

        $cv->html_css = $request->get('html_css');
        $cv->php = $request->get('php');
        $cv->laravel = $request->get('laravel');
        $cv->wordpress = $request->get('wordpress');
        $cv->skill1 = $request->get('skill1');
        $cv->skill2 = $request->get('skill2');
        $cv->skill3 = $request->get('skill3');
        $cv->skill4 = $request->get('skill4');
        $cv->design = $request->get('design');
        $cv->themes = $request->get('themes');
        $cv->user_experience = $request->get('user_experience');
        $cv->support = $request->get('support');
        $cv->company = $request->get('company');
        $cv->introduce = $request->get('introduce');
        $cv->save();
        return redirect()->route('index')->with('cv');
    }

    public function edit_resume($id)
    {
        $resume = Resume::findorfail($id);
        return view('admin.resume.edit', compact('resume'));
    }

    public function save_resume(Request $request, $id)
    {
        $resume = $this->resumeRepository->find($id);
        $resume->facebook = $request->get('facebook');
        $resume->google = $request->get('google');
        $resume->abc = $request->get('abc');
        $resume->university = $request->get('university');
        $resume->specialization = $request->get('specialization');
        $resume->high = $request->get('high');
        $resume->manager = $request->get('manager');
        $resume->designer = $request->get('designer');
        $resume->save();
        return redirect()->route('index')->with('resume');
    }

    public function edit_portfolio($id)
    {
        $portfolio = Portfolio::findorfail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function save_portfolio(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->project = $request->get('project');
        $portfolio->save();
        return redirect()->route('index')->with('portfolio');
    }

    public function edit_blog($id)
    {
        $blog = Blog::findorfail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function save_blog(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->original =$request->get('original');
        $blog->popular =$request->get('popular');
        $blog->everyone =$request->get('everyone');
        $blog->save();
        return redirect()->route('index')->with('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function edit_contact($id)
    {
        $contact = Contact::findorfail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function save_contact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->phone = $request->get('phone');
        $contact->address = $request->get('address');
        $contact->email = $request->get('email');
        return redirect()->route('index')->with('contact');
    }

    public function moi(Request $request)
    {
        $contact = new Contact();
        $contact->phone = $request->get('phone');
        $contact->address = $request->get('address');
        $contact->email = $request->get('email');
        $contact->save();
        return redirect()->route('index');
    }
}
    