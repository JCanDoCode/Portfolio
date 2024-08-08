const dynamicAboutContent = () => {
    if (vw <= 950) {
        about.innerHTML = `
                <div class="col-1">
                    <p>Hi, I’m Josel, a <span class="bold">Web Designer</span> in Vancouver, BC, Canada! <br><br>“Web Design” may have a definition to you already, but to me, web design is anything that is a design on the web. I love the work and thought process that goes into making our favorite websites! Even the browser you are using to view this now, so much time and effort went into making it the best it can be for the end user. Which I believe is <span class="bold"><i>why</i></span> I design for the web.</p>
                    <a href="#contact" class="btn">Contact</a>
                </div>
                <div class="col-2">
                    <h3>The Why!</h3>
                    <div class="image-container">
                        <div class="img-stroke">
                            <div class="top-left-stroke">
                                <div class="thick"></div>
                                <div class="thin"></div>
                            </div>
                            <div class="bottom-right-stroke">
                                <div class="thin"></div>
                                <div class="thick"></div>
                            </div>
                        </div>
                        <img src="./media/img/aboutpage.png" alt="Josel Canlas">
                    </div>
                </div>
                <p>I’ve always been taught to put my mind in the reader’s perspective. At BCIT, we code or design for the end user in mind when building a project. The user is always “why” I create anything. The “why” is something that has stuck with me since the start of my career. I always question, “why-” is something like that, or “why-” does a design look like this. Questions really drive <i>why</i> I do something, because without the why, then why are you doing what you do!</p>`;
    } else {
        about.innerHTML = `
                <div class="col-1">
                    <p>Hi, I’m Josel, a <span class="bold">Web Designer</span> in Vancouver, BC, Canada! <br><br>“Web Design” may have a definition to you already, but to me, web design is anything that is a design on the web. I love the work and thought process that goes into making our favorite websites! Even the browser you are using to view this now, so much time and effort went into making it the best it can be for the end user. Which I believe is <span class="bold"><i>why</i></span> I design for the web.</p>
                    <h3>The Why!</h3>
                    <p>I’ve always been taught to put my mind in the reader’s perspective. At BCIT, we code or design for the end user in mind when building a project. The user is always “why” I create anything. The “why” is something that has stuck with me since the start of my career. I always question, “why-” is something like that, or “why-” does a design look like this. Questions really drive <i>why</i> I do something, because without the why, then why are you doing what you do!</p>
                    <a href="#contact" class="btn">Contact</a>
                </div>
                <div class="col-2">
                    <div class="image-container">
                        <div class="img-stroke">
                            <div class="top-left-stroke">
                                <div class="thick"></div>
                                <div class="thin"></div>
                            </div>
                            <div class="bottom-right-stroke">
                                <div class="thin"></div>
                                <div class="thick"></div>
                            </div>
                        </div>
                        <img src="./media/img/aboutpage.png" alt="Josel Canlas">
                    </div>
                </div>`;
    }
}

window.addEventListener("DOMContentLoaded", dynamicAboutContent);