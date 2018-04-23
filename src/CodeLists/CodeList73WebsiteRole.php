<?php

namespace AragornYang\Onix\CodeLists;

class CodeList73WebsiteRole extends CodeList
{
    public const KEY = 'WebsiteRole';

    protected const MAPPING = [
        // 
        "00" => "Unspecified, see website description",
        // See also codes 17 and 18
        "01" => "Publisher’s corporate website",
        /* A publisher’s informative and/or promotional webpage relating to a specified work (book, journal, online resource or other
					publication type) */
        "02" => "Publisher’s website for a specified work",
        // A webpage giving access to an online content hosting service as a whole
        "03" => "Online hosting service home page",
        // A webpage giving general information about a serial, in print or electronic format or both
        "04" => "Journal home page",
        /* A webpage giving direct access to the content that is available online for a specified resource version. Generally used for
					content available online under subscription terms */
        "05" => "Online resource ‘available content’ page",
        // A webpage maintained by an author or other contributor about her/his publications and personal background
        "06" => "Contributor’s own website",
        // A publisher’s webpage devoted to a specific author or other contributor
        "07" => "Publisher’s website relating to specified contributor",
        /* A webpage devoted to a specific author or other contributor, and maintained by a publisher other than the publisher of the
					item described in the ONIX record */
        "08" => "Other publisher’s website relating to specified contributor",
        // A webpage devoted to a specific author or other contributor, and maintained by a third party (eg a fan site)
        "09" => "Third-party website relating to specified contributor",
        // A webpage maintained by an author or other contributor and specific to an individual work
        "10" => "Contributor’s own website for specified work",
        /* A webpage devoted to an individual work, and maintained by a publisher other than the publisher of the item described in the
					ONIX record */
        "11" => "Other publisher’s website relating to specified work",
        // A webpage devoted to an individual work, and maintained by a third party (eg a fan site)
        "12" => "Third-party website relating to specified work",
        // A webpage maintained by an author or other contributor and specific to a group or series of works
        "13" => "Contributor’s own website for group or series of works",
        // A publisher’s webpage devoted to a group or series of works
        "14" => "Publisher’s website relating to group or series of works",
        /* A webpage devoted to a group or series of works, and maintained by a publisher other than the publisher of the item described
					in the ONIX record */
        "15" => "Other publisher’s website relating to group or series of works",
        // A webpage devoted to a group or series of works, and maintained by a third party (eg a fan site)
        "16" => "Third-party website relating to group or series of works (eg a fan site)",
        // Use instead of code 01 to specify a publisher’s website for trade users
        "17" => "Publisher’s B2B website",
        // Use instead of code 01 to specify a publisher’s website for end customers (consumers)
        "18" => "Publisher’s B2C website",
        // For example, a Blogger or Tumblr URL, a Wordpress website or other blog URL
        "23" => "Author blog",
        // 
        "24" => "Web page for author presentation / commentary",
        // 
        "25" => "Web page for author interview",
        // 
        "26" => "Web page for author reading",
        // 
        "27" => "Web page for cover material",
        // 
        "28" => "Web page for sample content",
        /* Use this value in the <Website> composite in <SupplyDetail> when sending a link to a webpage at which a digital product is
					available for download and/or online access */
        "29" => "Web page for full content",
        // 
        "30" => "Web page for other commentary / discussion",
        // URL needed by the German National Library for direct access, harvesting and storage of an electronic resource
        "31" => "Transfer-URL",
        // Link needed by German Books in Print (VLB) for DOI registration and ONIX DOI conversion
        "32" => "DOI Website Link",
        // A corporate website operated by a distributor or other supplier (not the publisher)
        "33" => "Supplier’s corporate website",
        // A website operated by a distributor or other supplier (not the publisher) and aimed at trade customers
        "34" => "Supplier’s B2B website",
        // A website operated by a distributor or other supplier (not the publisher) and aimed at consumers
        "35" => "Supplier’s B2C website",
        // A distributor or supplier’s webpage describing a specified work
        "36" => "Supplier’s website for a specified work",
        // A distributor or supplier’s webpage describing a specified work, and aimed at trade customers
        "37" => "Supplier’s B2B website for a specified work",
        // A distributor or supplier’s webpage describing a specified work, and aimed at consumers
        "38" => "Supplier’s B2C website for a specified work",
        // A distributor or supplier’s webpage describing a group or series of works
        "39" => "Supplier’s website for a group or series of works",
        // For example an ONIX or MARC record for the product, available online
        "40" => "URL of full metadata description",
        // For example, a Facebook, Google+ or Twitter URL for the product or work
        "41" => "Social networking URL for specific work or product",
        // For example, a Facebook, Google+ or Twitter page
        "42" => "Author’s social networking URL",
        // For example, a Facebook, Google+ or Twitter page
        "43" => "Publisher’s social networking URL",
        // For example, a Facebook, Google+ or Twitter page. Use only in the context of a specific content item (eg within <ContentItem>)
        "44" => "Social networking URL for specific article, chapter or content item",
        // For example, a service offering click-through licensing of extracts
        "45" => "Publisher’s or third party website for permissions requests",
    ];
}