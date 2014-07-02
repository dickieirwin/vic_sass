<li class="result result_person" itemscope itemtype="http://schema.org/Person">
	<a itemprop="url" href="profile.php">
		<div class='block_secondary'>
			<img itemprop="photo" src='
			<?php 
			if ($photo) {
				echo $photo;
			} else {
				echo "/images/nobody-photo.png";
			}
			?>
			' alt=' '>
		</div>
		<h3 itemprop="name" class="result_title">Professor Jane Bloggs</h3>
		<h5>Professor of Materials Science, Macdiarmid Institute</h5>
	</a>	
	<div class="block_primary">
	
		
	
	<?php 
			if ($areas) {
				echo '<dl itemprop="description">
					<dt>Research Areas:</dt>
					<dd>Emulsions, biomineralisation, inorganic and organic composites, materials science, soft condensed matter</dd>
				</dl>';
			}
	?>
	<ul class="contacts_list" itemscope itemtype="http://schema.org/ContactPoint">
		<li><a itemprop="email" href='mailto:jane.bloggs@vuw.ac.nz'>jane.bloggs@vuw.ac.nz</a></li>
		<li><a itemprop="telephone" href='tel:080034745737'>Phone: 04 4635364</a></li>
		<li class="no_link">Fax: 04 384 6606, Hunter Bldg Gate 1 Kelburn Pde</li>

	</ul>
	<p class="result_url">http://www.victoria.ac.nz/som/staff/karen-smith</p>
	
	</div>
					
</li>