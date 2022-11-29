@extends('layouts.common')
@section('title', 'Career Details')
@section('content')

    <!--=====================================-->
    <!--=       Why Choose Area Start       =-->
    <!--=====================================-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us">
                        <div class="section-heading heading-left">
                            <h3 class="title">Software Engineer III</h3>
                            <br>
                            <h5>Minimum qualifications:</h5>
                            <ul>
                                <li>
                                    Bachelor’s degree or equivalent practical experience.
                                </li>
                                <li>2 years of experience with software development in one or more programming
                                    languages, or 1 year of experience with an advanced degree.
                                </li>
                                <li>2 years of experience with data structures or algorithms.</li>
                            </ul>

                            <h5>Preferred qualifications:</h5>

                            <ul>
                                <li>
                                    Master's degree or PhD in Computer Science or related technical fields.
                                </li>
                                <li>Experience developing accessible technologies.</li>
                            </ul>
                            <h5>About the job</h5>
                            <p>software engineers develop the next-generation technologies that change how billions of
                                users connect, explore, and interact with information and one another. Our products need
                                to handle information at massive scale, and extend well beyond web search. We're looking
                                for engineers who bring fresh ideas from all areas, including information retrieval,
                                distributed computing, large-scale system design, networking and data storage, security,
                                artificial intelligence, natural language processing, UI design and mobile; the list
                                goes on and is growing every day. As a software engineer, you will work on a specific
                                project critical to Google’s needs with opportunities to switch teams and projects as
                                you and our fast-paced business grow and evolve. We need our engineers to be versatile,
                                display leadership qualities and be enthusiastic to take on new problems across the
                                full-stack as we continue to push technology forward.

                                With your technical expertise you will manage project priorities, deadlines, and
                                deliverables. You will design, develop, test, deploy, maintain, and enhance software
                                solutions.

                                Google is an engineering company at heart. We hire people with a broad set of technical
                                skills who are ready to take on some of technology's greatest challenges and make an
                                impact on users around the world. At Google, engineers not only revolutionize search,
                                they routinely work on scalability and storage solutions, large-scale applications and
                                entirely new platforms for developers around the world. From Google Ads to Chrome,
                                Android to YouTube, social to local, Google engineers are changing the world one
                                technological achievement after another.

                                Additional Information:

                                The US base salary range for this full-time position is $126,000-$190,000 + bonus +
                                equity + benefits. Our salary ranges are determined by role, level, and location. The
                                range displayed on each job posting reflects the minimum and maximum target for new hire
                                salaries for the position across all US locations. Within the range, individual pay is
                                determined by work location and additional factors, including job-related skills,
                                experience, and relevant education or training. Your recruiter can share more about the
                                specific salary range for your preferred location during the hiring process. Please note
                                that the compensation details listed in US role postings reflect the base salary only,
                                and do not include bonus, equity, or benefits.</p>

                            <h5>Responsibilities</h5>
                            <ul>
                                <li>Write product or system development code.</li>
                                <li>Participate in, or lead design reviews with peers and stakeholders to decide amongst available technologies.</li>
                                <li>Review code developed by other developers and provide feedback to ensure best practices (e.g., style guidelines, checking code in, accuracy, testability, and efficiency).</li>
                                <li>Contribute to existing documentation or educational content and adapt content based on product/program updates and user feedback.</li>
                                <li>Triage product or system issues and debug/track/resolve by analyzing the sources of issues and the impact on hardware, network, or service operations and quality.</li>
                            </ul>
                            <br>
                            <p><b>Apply before :</b> 31.12.2022</p>
                        </div>
                        {{-- <div class="accordion" id="choose-accordion">
                             <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingOne">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         <i class="far fa-compress"></i> Strategy
                                     </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                     <div class="accordion-body">
                                         Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                     </div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTwo">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <i class="far fa-code"></i>Design
                                     </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#choose-accordion">
                                     <div class="accordion-body">
                                         Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                     </div>
                                 </div>
                             </div>
                             <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingThree">
                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <i class="fal fa-globe"></i>Development
                                     </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#choose-accordion">
                                     <div class="accordion-body">
                                         Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                     </div>
                                 </div>
                             </div>
                         </div>--}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-form-box shadow-box mb--30">
                        <h4>Direct Apply and Check status</h4>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="John Smith">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="name" placeholder="example@mail.com">
                            </div>
                            <div class="form-group mb--40">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="Phone" placeholder="+8801657889545">
                            </div>
                            <div class="form-group mb--40">
                                <label>Upload CV</label>
                                <input type="file" class="form-control" name="Phone" placeholder="+8801657889545">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid" name="submit-btn">Apply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
