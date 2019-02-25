<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<?php /* Template Name: Styles Template */ ?>
<main role="main">
  <div class="container">
		<div class="row">
			<section id="text">
		    <div class="main-heading"><h1>Text</h1></div>
		    <article id="text__headings">
		      <div>
		        <h1>Headings</h1>
		      </div>
		      <div>
		        <h1>Heading 1</h1>
		        <h2>Heading 2</h2>
		        <h3>Heading 3</h3>
		        <h4>Heading 4</h4>
		        <h5>Heading 5</h5>
		        <h6>Heading 6</h6>
		      </div>

		    </article>
		    <article id="text__paragraphs">
		      <div class="main-heading"><h1>Paragraphs</h1></div>
		      <div>
		        <p>A paragraph (from the Greek paragraphos, “to write beside” or “written beside”) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
		      </div>

		    </article>
		    <article id="text__blockquotes">
		      <div class="main-heading"><h1>Blockquotes</h1></div>
		      <div>
		        <blockquote>
		          <p>A block quotation <i>(also known as a long quotation or extract)</i> is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
		          <p>It is typically <strong>distinguished visually</strong> using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the bottom.</p>
		          <cite>Said no one, ever.</cite>
		        </blockquote>
		      </div>

		    </article>
		    <article id="text__lists">
		      <div class="main-heading"><h1>Lists</h1></div>
		      <div>
		        <h3>Ordered List</h3>
		        <ol>
		          <li>List Item 1</li>
		          <li>List Item 2</li>
		          <li>List Item 3</li>
		        </ol>
		        <h3>Unordered List</h3>
		        <ul>
		          <li>List Item 1</li>
		          <li>List Item 2</li>
		          <li>List Item 3</li>
		        </ul>
		      </div>

		    </article>

		    <article id="text__tables">
		      <div class="main-heading"><h1 style="border: none !important;">Tabular data</h1></div>
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>

					<table class="table">
					  <thead class="thead-light">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>

		    </article>

		    <article id="text__inline">
		      <div class="main-heading"><h1>Inline elements</h1></div>
		      <div>
		        <p><a href="#!">This is a text link</a>.</p>
		        <p><strong>Strong is used to indicate strong importance.</strong></p>
		        <p><em>This text has added emphasis.</em></p>
		        <p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>
		        <p>The <i>i element</i> is text that is offset from the normal text.</p>
		        <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>
		        <p><del>This text is deleted</del> and <ins>This text is inserted</ins>.</p>
		        <p><s>This text has a strikethrough</s>.</p>
		        <p>Superscript<sup>®</sup>.</p>
		        <p>Subscript for things like H<sub>2</sub>O.</p>
		        <p><small>This small text is small for for fine print, etc.</small></p>
		        <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
		        <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>
		        <p><cite>This is a citation.</cite></p>
		        <p>The <dfn>dfn element</dfn> indicates a definition.</p>
		        <p>The <mark>mark element</mark> indicates a highlight.</p>
		        <p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>
		        <p>The time element: <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></p>
		      </div>

		    </article>
		  </section>

		  <section id="forms">
		    <div class="main-heading"><h1>Form elements</h1></div>
				<?php echo do_shortcode('[ninja_form id=2]'); ?>
		  </section>
		</div>
	</div>
</main>
<?php get_footer(); ?>

<style>
.main-heading h1 {
	margin-bottom: 1.5rem;
	padding-bottom: 1.5rem;
	color: var(--primary);
	border-bottom: 1px solid rgba(0,0,0,.1);
	margin-top: 2.5rem;
}
</style>
