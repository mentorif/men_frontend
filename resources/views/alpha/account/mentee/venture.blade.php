@extends('layout.public')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-2">
            </div>
            <div id="pcon" class="col-sm-8">
                <h1>About Your Venture</h1>
                <p>
                    Here is where you tell us about your business, social enterprise, or nonprofit. We use the term
                    "venture" to refer to all types of businesses and organizations. </p>
                <p>
                    Remember, the more details you include about your venture, the more likely you are to connect with
                    the mentors on MicroMentor! </p>
                <div class="panel">
                    <div class="panel-body">
                        <form enctype="multipart/form-data" autocomplete="off" class="public" method="post" action="#">
                            {{csrf_field()}}
                            <div class="form-group  radio-group">
                                <fieldset>
                                    <legend>What type of venture or idea for a venture do you have?&#65279;<acronym
                                                title="Required Field">*</acronym></legend>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType1For-profit">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType1For-profit" class=""
                                                   style="margin-bottom:-8px" value="1_for-profit"/>For-profit venture</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType2Nonprofit">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType2Nonprofit" class=""
                                                    style="margin-bottom:-8px" value="2_nonprofit"/>Nonprofit
                                            organization</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType3Social-enterprise">
                                            <input  type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType3Social-enterprise" class=""
                                                    style="margin-bottom:-8px" value="3_social-enterprise"/>Social
                                            enterprise, (a venture that uses profits to fulfill a social or
                                            environmental mission)</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType4Unsure">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType4Unsure" class=""
                                                    style="margin-bottom:-8px" value="4_unsure"/>Unsure</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessTypeOther">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessTypeOther" class=""
                                                   style="margin-bottom:-8px" value="other"/>Other</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group business_type_other hidden ">
                                <label for="BusinessProfileBusinessTypeOther">If 'Other', please write in a type</label>
                                <input name="data[BusinessProfile][business_type_other]" type="text" class="form-control" maxlength="20" value="" id="BusinessProfileBusinessTypeOther"/>
                            </div>
                            <div class="form-group  form_group ">
                                <label for="BusinessProfileBusinessName">What is the
                                    name of your venture?<br/><em>Leave blank if your venture does not currently have a
                                        name</em>
                                </label>
                                <input name="data[BusinessProfile][business_name]" type="text" class="form-control" maxlength="100" value="" id="BusinessProfileBusinessName"/>
                            </div>
                            <div class="form-group  radio-group">
                                <fieldset>
                                    <legend>What stage best describes your venture?&#65279;<acronym
                                                title="Required Field">*</acronym></legend>
                                    <div class='radio'><label for="BusinessProfileBusinessStage0Idea"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage0Idea" class=""
                                                    style="margin-bottom:-8px" value="0_idea"/>My venture is at the idea
                                            stage – it does not yet have a working prototype or customers and is not
                                            operational.</label></div>
                                    <div class='radio'><label for="BusinessProfileBusinessStage1Operational"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage1Operational" class=""
                                                    style="margin-bottom:-8px" value="1_operational"/>My venture is
                                            operational, but does not yet have any earned revenue. (Earned revenue
                                            results from selling a product or service).</label></div>
                                    <div class='radio'><label for="BusinessProfileBusinessStage2Revenue"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage2Revenue" class=""
                                                    style="margin-bottom:-8px" value="2_revenue"/>My venture has
                                            customers and is earning revenue, but is not yet profitable. (A venture is
                                            not profitable when its earned revenue is less than its expenses).</label>
                                    </div>
                                    <div class='radio'><label for="BusinessProfileBusinessStage3Profitable"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage3Profitable" class=""
                                                    style="margin-bottom:-8px" value="3_profitable"/>My venture is
                                            operating at scale and is profitable. (Scale occurs when a venture is able
                                            to operate in volume discounts to clients or from suppliers. A venture is
                                            profitable when its earned revenue is greater than its expenses).</label>
                                    </div>
                                    <div class='radio'><label for="BusinessProfileBusinessStageOther"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStageOther" class=""
                                                    style="margin-bottom:-8px" value="other"/>Other</label></div>
                                </fieldset>
                            </div>
                            <div class="form-group  form_group business_stage_other hidden "><label
                                        for="BusinessProfileBusinessStageOther">If 'Other', please write in a
                                    stage</label><input name="data[BusinessProfile][business_stage_other]" type="text"
                                                        class="form-control" maxlength="20" value=""
                                                        id="BusinessProfileBusinessStageOther"/></div>
                            <div id="launch-date-wrapper" class="">
                                <label>When did you start your venture?&#65279;<acronym title="Required Field">*</acronym></label>
                                <div class="form-group ">
                                    <select name="data[BusinessProfile][launch_date_month]"  class="form-control" style="margin-bottom:-8px" id="BusinessProfileLaunchDateMonth">
                                        <option value="">-- Month --</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <select name="data[BusinessProfile][launch_date_year]" class="form-control" id="BusinessProfileLaunchDateYear">
                                        <option value="">-- Year --</option>
                                        @for($i = date('Y')+1; $i--; $i >= date('Y')-100)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group  form_group ">
                                <label for="BusinessProfileIndustryId">What is the industry that best discribes your venture?&#65279;<acronym title="Required Field">*</acronym></label>
                                <select name="data[BusinessProfile][industry_id]" class="form-control" id="BusinessProfileIndustryId">
                                    <option value="">- Select one -</option>
                                    <option value="30">Accounting and Tax Services</option>
                                    <option value="27">Agriculture</option>
                                    <option value="31">Animals and Pets</option>
                                    <option value="11">Architecture and Engineering</option>
                                    <option value="1">Artisan and Craft Work</option>
                                    <option value="2">Auto and Bike Mechanic</option>
                                    <option value="3">Beauty</option>
                                    <option value="33">Bookstore</option>
                                    <option value="4">Business Consulting and Coaching</option>
                                    <option value="5">Childcare</option>
                                    <option value="17">Cleaning Services</option>
                                    <option value="7">Construction and Contracting</option>
                                    <option value="55">Counseling and Mental Health</option>
                                    <option value="60">Digital Marketing and Social Media</option>
                                    <option value="35">Disability Services</option>
                                    <option value="25">Distribution and Logistics</option>
                                    <option value="56">E-Commerce</option>
                                    <option value="36">Education</option>
                                    <option value="34">Elder and Home Health Care</option>
                                    <option value="9">Entertainment and Events</option>
                                    <option value="10">Export and Import</option>
                                    <option value="8">Fashion</option>
                                    <option value="12">Financial Services and Insurance</option>
                                    <option value="37">Flowers and Gifts</option>
                                    <option value="14">Food and Grocery</option>
                                    <option value="28">Forestry</option>
                                    <option value="38">Furniture</option>
                                    <option value="23">Graphic and Web Design</option>
                                    <option value="16">Health and Wellness</option>
                                    <option value="6">Information Technology Services</option>
                                    <option value="39">Jewelry and Luxury Goods</option>
                                    <option value="15">Landscaping</option>
                                    <option value="40">Laundry and Tailoring</option>
                                    <option value="41">Legal Services</option>
                                    <option value="42">Manufacturing</option>
                                    <option value="18">Marketing and Advertising</option>
                                    <option value="57">Media and Publishing</option>
                                    <option value="26">Nonprofit and Social Enterprise</option>
                                    <option value="32">Performing Arts</option>
                                    <option value="43">Personal and Executive Assistance</option>
                                    <option value="21">Photography and A/V Services</option>
                                    <option value="44">Public Relations</option>
                                    <option value="19">Real Estate</option>
                                    <option value="46">Recreation and Outdoor Fitness</option>
                                    <option value="45">Recruiting and Staffing</option>
                                    <option value="24">Restaurant and Catering</option>
                                    <option value="59">Retail</option>
                                    <option value="29">Sustainability</option>
                                    <option value="47">Taxi and Limo Services</option>
                                    <option value="48">Translation and Localization</option>
                                    <option value="49">Travel and Hospitality</option>
                                    <option value="50">Veterinary</option>
                                    <option value="58">Web and Technology</option>
                                    <option value="51">Wine and Spirits</option>
                                    <option value="52">Writing and Editing</option>
                                </select></div>
                            <div class="form-group "><label for="BusinessProfileBusinessOffers">Please provide a
                                    description of your venture for potential mentors to see.&#65279;<acronym
                                            title="Required Field">*</acronym> <em class="hidden-80"> (<span
                                                class="limit">1000</span> characters left)</em><br><em>Include your
                                        motivations, what actions you’ve taken up until now, and your future goals in
                                        150 or more words.</em></label><textarea
                                        name="data[BusinessProfile][business_offers]" cols="30" rows="4"
                                        class="form-control"
                                        placeholder="Good responses tend to range between 300 and 1,000 characters"
                                        id="BusinessProfileBusinessOffers"></textarea></div>
                            <div class="form-group "><label for="BusinessProfileSelectedFunctionalAreas">Please select
                                    the 3 areas of expertise that would be most helpful to your venture right now.&#65279;<acronym
                                            title="Required Field">*</acronym></label><input type="hidden"
                                                                                             name="data[BusinessProfile][SelectedFunctionalAreas]"
                                                                                             value=""/>
                                <select name="data[BusinessProfile][SelectedFunctionalAreas][]" class="form-control"
                                        multiple="multiple" data-placeholder="- Select up to 3 -"
                                        id="BusinessProfileSelectedFunctionalAreas">
                                    <option value="">- Select up to 3 -</option>
                                    <optgroup label="Accounting and Finance">
                                        <option value="1">Accounting</option>
                                        <option value="126">Audits</option>
                                        <option value="2">Bookkeeping</option>
                                        <option value="3">Budgeting</option>
                                        <option value="4">Cash Flow</option>
                                        <option value="6">Financial Planning</option>
                                        <option value="7">Loans and Financing</option>
                                        <option value="8">Taxes</option>
                                        <option value="101">Other</option>
                                    </optgroup>
                                    <optgroup label="Getting started">
                                        <option value="63">Business Planning</option>
                                        <option value="59">Franchising</option>
                                        <option value="61">Getting Started</option>
                                        <option value="62">Legal Structure</option>
                                        <option value="60">Location and Zoning</option>
                                        <option value="109">Other</option>
                                    </optgroup>
                                    <optgroup label="Human Resources">
                                        <option value="9">Compensation and Benefits</option>
                                        <option value="11">Contractors and Consultants</option>
                                        <option value="10">Employee Management</option>
                                        <option value="14">Employee Training</option>
                                        <option value="12">Personnel Policies</option>
                                        <option value="13">Staffing and Recruiting</option>
                                        <option value="122">Volunteer Management</option>
                                        <option value="102">Other</option>
                                    </optgroup>
                                    <optgroup label="International">
                                        <option value="15">Customs and Tariffs</option>
                                        <option value="16">Exporting and Importing</option>
                                        <option value="17">Global Markets</option>
                                        <option value="19">Outsourcing</option>
                                        <option value="103">Other</option>
                                    </optgroup>
                                    <optgroup label="Law and Legal">
                                        <option value="20">Contracts</option>
                                        <option value="22">Employment/Labor Law</option>
                                        <option value="23">Immigration Law</option>
                                        <option value="21">Intellectual Property</option>
                                        <option value="25">Property Law</option>
                                        <option value="26">Tax Law</option>
                                        <option value="104">Other</option>
                                    </optgroup>
                                    <optgroup label="Management">
                                        <option value="120">Board Development</option>
                                        <option value="27">Business Insurance</option>
                                        <option value="119">Business Strategy</option>
                                        <option value="121">Fundraising</option>
                                        <option value="28">Growth and Development</option>
                                        <option value="29">Leadership</option>
                                        <option value="32">Planning and Goal Setting</option>
                                        <option value="33">Project Management</option>
                                        <option value="36">Work-Life Balance</option>
                                        <option value="105">Other</option>
                                    </optgroup>
                                    <optgroup label="Marketing">
                                        <option value="37">Advertising and Promotion</option>
                                        <option value="38">Branding and Identity</option>
                                        <option value="39">Business Development</option>
                                        <option value="40">Distribution</option>
                                        <option value="42">Market Research</option>
                                        <option value="41">Marketing Collateral</option>
                                        <option value="43">Marketing Strategy</option>
                                        <option value="44">Pricing</option>
                                        <option value="111">Product Development</option>
                                        <option value="45">Public Relations and Media</option>
                                        <option value="125">Social Media</option>
                                        <option value="46">Web Marketing</option>
                                        <option value="112">Writing and Editing</option>
                                        <option value="106">Other</option>
                                    </optgroup>
                                    <optgroup label="Operations">
                                        <option value="47">Inventory Management</option>
                                        <option value="48">Logistics</option>
                                        <option value="49">Manufacturing</option>
                                        <option value="113">Packaging and Labeling</option>
                                        <option value="124">Process Improvement</option>
                                        <option value="50">Procurement and Vendors</option>
                                        <option value="123">Program Design &amp; Evaluation</option>
                                        <option value="114">Quality Management</option>
                                        <option value="51">Transportation and Delivery</option>
                                        <option value="107">Other</option>
                                    </optgroup>
                                    <optgroup label="Sales">
                                        <option value="52">Customer Service and CRM</option>
                                        <option value="53">Government Contracts</option>
                                        <option value="54">Lead Generation</option>
                                        <option value="55">Retail and Consumer Sales</option>
                                        <option value="56">Selling Products</option>
                                        <option value="57">Selling Services</option>
                                        <option value="58">Wholesale and B2B Sales</option>
                                        <option value="108">Other</option>
                                    </optgroup>
                                    <optgroup label="Sustainability">
                                        <option value="115">Energy Efficiency</option>
                                        <option value="116">Green Business</option>
                                        <option value="117">Green Products</option>
                                        <option value="118">Other</option>
                                    </optgroup>
                                    <optgroup label="Technology and Internet">
                                        <option value="65">E-Commerce</option>
                                        <option value="66">Managing Technology</option>
                                        <option value="64">Technology Planning</option>
                                        <option value="67">Telecommunications</option>
                                        <option value="68">Website Design</option>
                                        <option value="110">Other</option>
                                    </optgroup>
                                </select></div>
                            <div class="form-group "><label for="BusinessProfileBusinessRequest">Please provide a
                                    description of how a mentor could help you develop your venture.&#65279;<acronym
                                            title="Required Field">*</acronym> <em class="hidden-80"> (<span
                                                class="limit">1000</span> characters left)</em><br><em>Include the
                                        current challenges you are facing and specific areas of your venture that you
                                        need help with in 150 or more words.</em></label><textarea
                                        name="data[BusinessProfile][business_request]" cols="30" rows="4"
                                        class="form-control" id="BusinessProfileBusinessRequest"></textarea></div>
                            <div class="form-group  public"><label for="UserCountryId" class="bold">Please tell us where
                                    your venture is based.&#65279;<acronym
                                            title="Required Field">*</acronym></label><select
                                        name="data[User][country_id]" class="form-control" id="UserCountryId">
                                    <option value="1">United States</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Albania</option>
                                    <option value="6">Algeria</option>
                                    <option value="7">Andorra</option>
                                    <option value="8">Angola</option>
                                    <option value="9">Anguilla</option>
                                    <option value="10">Antarctica</option>
                                    <option value="11">Antigua and Barbuda</option>
                                    <option value="12">Argentina</option>
                                    <option value="13">Armenia</option>
                                    <option value="14">Aruba</option>
                                    <option value="15">Ascension Island</option>
                                    <option value="16">Australia</option>
                                    <option value="17">Austria</option>
                                    <option value="18">Azerbaijan</option>
                                    <option value="19">Bahamas</option>
                                    <option value="20">Bahrain</option>
                                    <option value="21">Bangladesh</option>
                                    <option value="22">Barbados</option>
                                    <option value="23">Belarus</option>
                                    <option value="24">Belgium</option>
                                    <option value="25">Belize</option>
                                    <option value="26">Benin</option>
                                    <option value="27">Bermuda</option>
                                    <option value="28">Bhutan</option>
                                    <option value="29">Bolivia</option>
                                    <option value="31">Bosnia-Herzegovina</option>
                                    <option value="32">Botswana</option>
                                    <option value="33">Bouvet Island</option>
                                    <option value="34">Brazil</option>
                                    <option value="35">British Indian Ocean</option>
                                    <option value="36">British Virgin Islands</option>
                                    <option value="37">Brunei Darussalam</option>
                                    <option value="38">Bulgaria</option>
                                    <option value="39">Burkina Faso</option>
                                    <option value="40">Burundi</option>
                                    <option value="41">Cambodia</option>
                                    <option value="42">Cameroon</option>
                                    <option value="2">Canada</option>
                                    <option value="44">Cape Verde Island</option>
                                    <option value="45">Cayman Islands</option>
                                    <option value="46">Central African Republic</option>
                                    <option value="47">Chad</option>
                                    <option value="48">Channel Islands</option>
                                    <option value="49">Chile</option>
                                    <option value="50">China</option>
                                    <option value="51">Christmas Island</option>
                                    <option value="52">Cocos (Keeling) Islands</option>
                                    <option value="53">Colombia</option>
                                    <option value="54">Comoros Islands</option>
                                    <option value="55">Congo</option>
                                    <option value="239">Congo (DRC)</option>
                                    <option value="56">Cook Islands</option>
                                    <option value="57">Costa Rica</option>
                                    <option value="58">Croatia</option>
                                    <option value="59">Cuba</option>
                                    <option value="60">Cyprus</option>
                                    <option value="61">Czech Republic</option>
                                    <option value="108">Côte d&#039;Ivoire</option>
                                    <option value="62">Denmark</option>
                                    <option value="63">Djibouti</option>
                                    <option value="64">Dominica</option>
                                    <option value="65">Dominican Republic</option>
                                    <option value="245">East Timor (Timor-Leste)</option>
                                    <option value="66">Easter Island</option>
                                    <option value="67">Ecuador</option>
                                    <option value="68">Egypt</option>
                                    <option value="69">El Salvador</option>
                                    <option value="71">Equatorial Guinea</option>
                                    <option value="246">Eritrea</option>
                                    <option value="72">Estonia</option>
                                    <option value="73">Ethiopia</option>
                                    <option value="75">Faeroe Islands</option>
                                    <option value="74">Falkland Islands</option>
                                    <option value="76">Fiji</option>
                                    <option value="77">Finland</option>
                                    <option value="78">France</option>
                                    <option value="79">French Guyana</option>
                                    <option value="80">French Polynesia</option>
                                    <option value="81">Gabon</option>
                                    <option value="82">Gambia</option>
                                    <option value="83">Georgia Republic</option>
                                    <option value="84">Germany</option>
                                    <option value="247">Ghana</option>
                                    <option value="85">Gibraltar</option>
                                    <option value="86">Greece</option>
                                    <option value="87">Greenland</option>
                                    <option value="88">Grenada</option>
                                    <option value="89">Guadeloupe (French)</option>
                                    <option value="90">Guatemala</option>
                                    <option value="91">Guernsey Island</option>
                                    <option value="93">Guinea</option>
                                    <option value="92">Guinea Bissau</option>
                                    <option value="94">Guyana</option>
                                    <option value="95">Haiti</option>
                                    <option value="96">Heard and McDonald Isls</option>
                                    <option value="97">Honduras</option>
                                    <option value="98">Hong Kong</option>
                                    <option value="99">Hungary</option>
                                    <option value="100">Iceland</option>
                                    <option value="101">India</option>
                                    <option value="248">Indonesia</option>
                                    <option value="102">Iran</option>
                                    <option value="103">Iraq</option>
                                    <option value="104">Ireland</option>
                                    <option value="105">Isle of Man</option>
                                    <option value="106">Israel</option>
                                    <option value="107">Italy</option>
                                    <option value="109">Jamaica</option>
                                    <option value="110">Japan</option>
                                    <option value="111">Jersey Island</option>
                                    <option value="112">Jordan</option>
                                    <option value="113">Kazakhstan</option>
                                    <option value="114">Kenya</option>
                                    <option value="115">Kiribati</option>
                                    <option value="116">Kuwait</option>
                                    <option value="249">Kyrgyzstan</option>
                                    <option value="117">Laos</option>
                                    <option value="118">Latvia</option>
                                    <option value="119">Lebanon</option>
                                    <option value="120">Lesotho</option>
                                    <option value="121">Liberia</option>
                                    <option value="122">Libya</option>
                                    <option value="123">Liechtenstein</option>
                                    <option value="124">Lithuania</option>
                                    <option value="125">Luxembourg</option>
                                    <option value="126">Macao</option>
                                    <option value="127">Macedonia</option>
                                    <option value="128">Madagascar</option>
                                    <option value="129">Malawi</option>
                                    <option value="130">Malaysia</option>
                                    <option value="131">Maldives</option>
                                    <option value="132">Mali</option>
                                    <option value="133">Malta</option>
                                    <option value="250">Marshall Islands</option>
                                    <option value="134">Martinique (French)</option>
                                    <option value="135">Mauritania</option>
                                    <option value="136">Mauritius</option>
                                    <option value="137">Mayotte</option>
                                    <option value="3">Mexico</option>
                                    <option value="139">Micronesia</option>
                                    <option value="140">Moldova</option>
                                    <option value="141">Monaco</option>
                                    <option value="142">Mongolia</option>
                                    <option value="143">Montenegro</option>
                                    <option value="144">Montserrat</option>
                                    <option value="145">Morocco</option>
                                    <option value="146">Mozambique</option>
                                    <option value="147">Myanmar</option>
                                    <option value="148">Namibia</option>
                                    <option value="149">Nauru</option>
                                    <option value="150">Nepal</option>
                                    <option value="152">Netherlands</option>
                                    <option value="151">Netherlands Antilles</option>
                                    <option value="153">New Caledonia (French)</option>
                                    <option value="154">New Zealand</option>
                                    <option value="155">Nicaragua</option>
                                    <option value="156">Niger</option>
                                    <option value="251">Nigeria</option>
                                    <option value="157">Niue</option>
                                    <option value="158">Norfolk Island</option>
                                    <option value="159">North Korea</option>
                                    <option value="160">Northern Ireland</option>
                                    <option value="161">Norway</option>
                                    <option value="162">Oman</option>
                                    <option value="163">Pakistan</option>
                                    <option value="252">Palau</option>
                                    <option value="243">Palestinian territories</option>
                                    <option value="164">Panama</option>
                                    <option value="165">Papua New Guinea</option>
                                    <option value="166">Paraguay</option>
                                    <option value="167">Peru</option>
                                    <option value="168">Philippines</option>
                                    <option value="169">Pitcairn Island</option>
                                    <option value="170">Poland</option>
                                    <option value="171">Polynesia (French)</option>
                                    <option value="172">Portugal</option>
                                    <option value="173">Qatar</option>
                                    <option value="174">Reunion Island</option>
                                    <option value="175">Romania</option>
                                    <option value="176">Russia</option>
                                    <option value="177">Rwanda</option>
                                    <option value="178">S.Georgia Sandwich Isls</option>
                                    <option value="236">Samoa</option>
                                    <option value="180">San Marino</option>
                                    <option value="179">Sao Tome, Principe</option>
                                    <option value="181">Saudi Arabia</option>
                                    <option value="182">Scotland</option>
                                    <option value="183">Senegal</option>
                                    <option value="184">Serbia</option>
                                    <option value="185">Seychelles</option>
                                    <option value="187">Sierra Leone</option>
                                    <option value="188">Singapore</option>
                                    <option value="189">Slovak Republic</option>
                                    <option value="190">Slovenia</option>
                                    <option value="191">Solomon Islands</option>
                                    <option value="192">Somalia</option>
                                    <option value="193">South Africa</option>
                                    <option value="194">South Korea</option>
                                    <option value="195">Spain</option>
                                    <option value="196">Sri Lanka</option>
                                    <option value="197">St. Helena</option>
                                    <option value="201">St. Kitts Nevis Anguilla</option>
                                    <option value="198">St. Lucia</option>
                                    <option value="200">St. Martins</option>
                                    <option value="199">St. Pierre Miquelon</option>
                                    <option value="202">St. Vincent Grenadines</option>
                                    <option value="203">Sudan</option>
                                    <option value="204">Suriname</option>
                                    <option value="205">Svalbard Jan Mayen</option>
                                    <option value="206">Swaziland</option>
                                    <option value="207">Sweden</option>
                                    <option value="208">Switzerland</option>
                                    <option value="209">Syria</option>
                                    <option value="211">Taiwan</option>
                                    <option value="210">Tajikistan</option>
                                    <option value="213">Tanzania</option>
                                    <option value="214">Thailand</option>
                                    <option value="215">Togo</option>
                                    <option value="216">Tokelau</option>
                                    <option value="217">Tonga</option>
                                    <option value="218">Trinidad and Tobago</option>
                                    <option value="219">Tunisia</option>
                                    <option value="253">Turkey</option>
                                    <option value="220">Turkmenistan</option>
                                    <option value="221">Turks and Caicos Isls</option>
                                    <option value="222">Tuvalu</option>
                                    <option value="223">Uganda</option>
                                    <option value="224">Ukraine</option>
                                    <option value="225">United Arab Emirates</option>
                                    <option value="70">United Kingdom</option>
                                    <option value="226">Uruguay</option>
                                    <option value="227">Uzbekistan</option>
                                    <option value="228">Vanuatu</option>
                                    <option value="229">Vatican City State</option>
                                    <option value="230">Venezuela</option>
                                    <option value="231">Vietnam</option>
                                    <option value="232">Virgin Islands (Brit)</option>
                                    <option value="233">Wales</option>
                                    <option value="234">Wallis Futuna Islands</option>
                                    <option value="235">Western Sahara</option>
                                    <option value="237">Yemen</option>
                                    <option value="240">Zambia</option>
                                    <option value="241">Zimbabwe</option>
                                    <option value="242">Decline to state</option>
                                </select></div>
                            <div class="city-state-zip">
                                <div class="col-md-6 city">
                                    <div class="form-group  public"><label for="UserCity">City</label><input
                                                name="data[User][city]" type="text" class="form-control" id="UserCity"
                                                maxlength="50" value=""/></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group  stateus"><label for="UserState">Region<acronym
                                                    title="Shows in your public profile" class="public">&nbsp;</acronym></label><select
                                                name="data[User][state]" class="form-control" id="UserState">
                                            <option value="">Select a Region</option>
                                        </select></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group  stateother"><label for="UserStateOther">State/Region/Department
                                            (if applicable)<acronym title="Shows in your public profile" class="public">&nbsp;</acronym></label><input
                                                name="data[User][state]" type="text" class="form-control"
                                                id="UserStateOther" maxlength="50" value=""/></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 zip"><!--
-->
                                        <div class="form-group  public"><label for="UserPostalCode">Postal
                                                Code</label><input name="data[User][postal_code]" type="text"
                                                                   class="form-control" id="UserPostalCode"
                                                                   maxlength="20" value=""/></div>
                                    </div>
                                </div>
                                <div id="website-wrapper" class="form-group ">
                                    <label>Please provide all the website addresses where you promote your
                                        business.</label>

                                    <div class="website-question">

                                        <div class="BusinessProfileWebsite1">
                                            <div class="form-group "><input
                                                        name="data[BusinessProfile][Website][1][url]" type="text"
                                                        class="form-control" placeholder="www.yoursite.com" value=""
                                                        id="BusinessProfileWebsite1Url"/></div>
                                            <div class="form-group "><select
                                                        name="data[BusinessProfile][Website][1][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite1Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active website">My venture&#039;s active website
                                                        address
                                                    </option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                        </div>
                                        <div class="hidden">
                                            <div class="form-group "><input
                                                        name="data[BusinessProfile][Website][2][url]" type="text"
                                                        class="form-control" placeholder="www.yoursite.com" value=""
                                                        id="BusinessProfileWebsite2Url"/></div>
                                            <div class="form-group "><select
                                                        name="data[BusinessProfile][Website][2][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite2Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active website">My venture&#039;s active website
                                                        address
                                                    </option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                            <a class="delete-website">delete<a></div>
                                        <div class="hidden">
                                            <div class="form-group "><input
                                                        name="data[BusinessProfile][Website][3][url]" type="text"
                                                        class="form-control" placeholder="www.yoursite.com" value=""
                                                        id="BusinessProfileWebsite3Url"/></div>
                                            <div class="form-group "><select
                                                        name="data[BusinessProfile][Website][3][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite3Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active website">My venture&#039;s active website
                                                        address
                                                    </option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                            <a class="delete-website">delete<a></div>
                                        <div class="hidden">
                                            <div class="form-group "><input
                                                        name="data[BusinessProfile][Website][4][url]" type="text"
                                                        class="form-control" placeholder="www.yoursite.com" value=""
                                                        id="BusinessProfileWebsite4Url"/></div>
                                            <div class="form-group "><select
                                                        name="data[BusinessProfile][Website][4][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite4Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active website">My venture&#039;s active website
                                                        address
                                                    </option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                            <a class="delete-website">delete<a></div>
                                        <div class="hidden">
                                            <div class="form-group "><input
                                                        name="data[BusinessProfile][Website][5][url]" type="text"
                                                        class="form-control" placeholder="www.yoursite.com" value=""
                                                        id="BusinessProfileWebsite5Url"/></div>
                                            <div class="form-group "><select
                                                        name="data[BusinessProfile][Website][5][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite5Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active website">My venture&#039;s active website
                                                        address
                                                    </option>
                                                    <option value="linkedin">Linkedin</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                            <a class="delete-website">delete<a></div>
                                        <br>
                                        <div class="add-website-text"><span class="glyphicon glyphicon-plus"
                                                                            id="add-website"></span> Add website
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="data[BusinessProfile][baseline_survey]" value="1"
                                       id="BusinessProfileBaselineSurvey"/>
                                <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit"
                                                              value="Save and Continue"/></div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>

            <script type="text/javascript">
                var regionLabels = {
                    "1": "State",
                    "3": "State",
                    "90": "Department",
                    "219": "Governorate",
                    "0": "Region"
                };

                jQuery(function ($) {
                    //if page is loaded with data
                    if ($('input[name*=business_stage][type=radio]')[0] && $('input[name*=business_stage][type=radio]')[0].checked) {
                        $('#launch-date-wrapper').slideUp('fast');
                        $('.business_stage_other').addClass('hidden');
                    } else if ($('input[name*=business_stage][type=radio]')[4] && $('input[name*=business_stage][type=radio]')[4].checked) {
                        $('.business_stage_other').removeClass('hidden');
                        $('#launch-date-wrapper').slideDown('fast');
                    } else {
                        $('.business_stage_other').addClass('hidden');
                        $('#launch-date-wrapper').slideDown('fast');
                    }
                    //on change
                    $('input[name*=business_stage][type=radio]').change(function () {
                        if ($(this).val() == '0_idea' && $(this).is(':checked')) {
                            $('#launch-date-wrapper').slideUp('fast');
                            $('.business_stage_other').addClass('hidden');
                        } else if ($(this).val() == 'other' && $(this).is(':checked')) {
                            $('.business_stage_other').removeClass('hidden');
                            $('#launch-date-wrapper').slideDown('fast');
                        } else {
                            $('#launch-date-wrapper').slideDown('fast');
                            $('.business_stage_other').addClass('hidden');
                        }
                    });

                    $('input[name*=business_type][type=radio]').change(function () {
                        if ($(this).val() == 'other' && $(this).is(':checked')) {
                            $('.business_type_other').removeClass('hidden');
                        } else {
                            $('.business_type_other').addClass('hidden');

                        }
                    });
                    $('input#UserInvite').change(function () {
                        var hideFields = [
                            '#UserCountryId',
                            '#UserCity',
                            '#UserEsdCounty',
                            '#UserState',
                            '#UserStateOther',
                            '#UserPostalCode',
                            '#UserPhone'
                        ];
                        if ($(this).prop('checked')) {
                            $(hideFields.join(",")).val('');
                            // after clearing out values above, put back values if default state is set
                            $('#UserCountryId').val(1);
                            $('#UserState').val("");
                            $(hideFields.join(",")).closest("div").hide();
                            $("hr.hide-on-invite").hide();
                        } else {
                            $(hideFields.join(",")).closest("div").show();
                            $("hr.hide-on-invite").show();
                            $(".stateother").hide(); // have to hide this again because of the multiple-field showing above
                        }
                    }).change();

                    $('#UserCountryId').chosen({
                        width: "100%"
                    });
                    $('#UserCountryId').change(function () {
                        var chosenCountryId = $(this).val();
                        var country_codes = {
                            "1": 1,
                            "2": 1,
                            "3": 52,
                            "4": 93,
                            "5": 355,
                            "6": 213,
                            "7": 1,
                            "8": 244,
                            "9": 1,
                            "10": 672,
                            "11": 1,
                            "12": 54,
                            "13": 374,
                            "14": 297,
                            "15": 247,
                            "16": 61,
                            "17": 43,
                            "18": 994,
                            "19": 1,
                            "20": 973,
                            "21": 880,
                            "22": 1,
                            "23": 375,
                            "24": 32,
                            "25": 501,
                            "26": 229,
                            "27": 1,
                            "28": 975,
                            "29": 591,
                            "31": 387,
                            "32": 267,
                            "33": 47,
                            "34": 55,
                            "35": 1,
                            "36": 1,
                            "37": 673,
                            "38": 359,
                            "39": 226,
                            "40": 257,
                            "41": 855,
                            "42": 237,
                            "44": 238,
                            "45": 1,
                            "46": 236,
                            "47": 235,
                            "48": 44,
                            "49": 56,
                            "50": 86,
                            "51": 61,
                            "52": 61,
                            "53": 57,
                            "54": 269,
                            "55": 242,
                            "56": 682,
                            "57": 506,
                            "58": 385,
                            "59": 53,
                            "60": 357,
                            "61": 420,
                            "62": 45,
                            "63": 253,
                            "64": 1,
                            "65": 1,
                            "66": 56,
                            "67": 593,
                            "68": 20,
                            "69": 503,
                            "70": 44,
                            "71": 240,
                            "72": 372,
                            "73": 251,
                            "74": 500,
                            "75": 298,
                            "76": 679,
                            "77": 358,
                            "78": 33,
                            "79": 594,
                            "80": 689,
                            "81": 241,
                            "82": 220,
                            "83": 995,
                            "84": 49,
                            "85": 350,
                            "86": 30,
                            "87": 299,
                            "88": 1,
                            "89": 590,
                            "90": 502,
                            "91": 44,
                            "92": 245,
                            "93": 224,
                            "94": 592,
                            "95": 509,
                            "96": 379,
                            "97": 504,
                            "98": 852,
                            "99": 36,
                            "100": 354,
                            "101": 91,
                            "102": 98,
                            "103": 964,
                            "104": 353,
                            "105": 44,
                            "106": 972,
                            "107": 39,
                            "108": 225,
                            "109": 1,
                            "110": 81,
                            "111": 44,
                            "112": 962,
                            "113": 7,
                            "114": 254,
                            "115": 686,
                            "116": 965,
                            "117": 856,
                            "118": 371,
                            "119": 961,
                            "120": 266,
                            "121": 231,
                            "122": 218,
                            "123": 423,
                            "124": 370,
                            "125": 352,
                            "126": 853,
                            "127": 389,
                            "128": 261,
                            "129": 265,
                            "130": 60,
                            "131": 960,
                            "132": 223,
                            "133": 356,
                            "134": 596,
                            "135": 222,
                            "136": 230,
                            "137": 262,
                            "139": 691,
                            "140": 373,
                            "141": 377,
                            "142": 976,
                            "143": 382,
                            "144": 1,
                            "145": 212,
                            "146": 258,
                            "147": 95,
                            "148": 264,
                            "149": 674,
                            "150": 977,
                            "151": 599,
                            "152": 31,
                            "153": 687,
                            "154": 64,
                            "155": 505,
                            "156": 227,
                            "157": 234,
                            "158": 672,
                            "159": 850,
                            "160": 44,
                            "161": 47,
                            "162": 968,
                            "163": 92,
                            "164": 507,
                            "165": 675,
                            "166": 595,
                            "167": 51,
                            "168": 63,
                            "169": 870,
                            "170": 48,
                            "171": 689,
                            "172": 351,
                            "173": 974,
                            "174": 262,
                            "175": 40,
                            "176": 7,
                            "177": 250,
                            "178": 500,
                            "179": 239,
                            "180": 378,
                            "181": 966,
                            "182": 44,
                            "183": 221,
                            "184": 381,
                            "185": 248,
                            "187": 232,
                            "188": 65,
                            "189": 421,
                            "190": 386,
                            "191": 677,
                            "192": 252,
                            "193": 27,
                            "194": 82,
                            "195": 34,
                            "196": 94,
                            "197": 290,
                            "198": 1,
                            "199": 508,
                            "200": 1,
                            "201": 1,
                            "202": 1,
                            "203": 249,
                            "204": 597,
                            "205": 47,
                            "206": 268,
                            "207": 46,
                            "208": 41,
                            "209": 963,
                            "210": 992,
                            "211": 886,
                            "213": 255,
                            "214": 66,
                            "215": 228,
                            "216": 690,
                            "217": 676,
                            "218": 1,
                            "219": 216,
                            "220": 993,
                            "221": 1,
                            "222": 688,
                            "223": 256,
                            "224": 380,
                            "225": 971,
                            "226": 598,
                            "227": 998,
                            "228": 678,
                            "229": 379,
                            "230": 58,
                            "231": 84,
                            "232": 1,
                            "233": 44,
                            "234": 681,
                            "235": 212,
                            "236": 685,
                            "237": 967,
                            "239": 242,
                            "240": 260,
                            "241": 263,
                            "242": 0,
                            "243": 970,
                            "245": 1,
                            "246": 291,
                            "247": 233,
                            "248": 62,
                            "249": 996,
                            "250": 692,
                            "251": 234,
                            "252": 680,
                            "253": 90
                        };
                        $('#UserPhone').val('+' + country_codes[chosenCountryId] + ' - ' + $('#UserPhone').val());
                    });
                    $('#BusinessProfileSelectedFunctionalAreas').chosen({
                        width: "100%",
                        max_selected_options: 3
                    });
                    $('#BusinessProfileIndustryId, #UserLanguageId').chosen({
                        width: "100%"
                    });
                    $('#BusinessProfileSelectedFunctionalAreas').chosen({
                        width: "100%",
                        max_selected_options: 3
                    });
                    var initialState = "";
                    var phoneNumber = $('#UserPhone').val();
                    if ($('#UserCountryId').length > 0) {
                        $('#UserCountryId').change(function () {
                            var chosenCountryId = $(this).val();
                            var country_codes = {
                                "1": 1,
                                "2": 1,
                                "3": 52,
                                "4": 93,
                                "5": 355,
                                "6": 213,
                                "7": 1,
                                "8": 244,
                                "9": 1,
                                "10": 672,
                                "11": 1,
                                "12": 54,
                                "13": 374,
                                "14": 297,
                                "15": 247,
                                "16": 61,
                                "17": 43,
                                "18": 994,
                                "19": 1,
                                "20": 973,
                                "21": 880,
                                "22": 1,
                                "23": 375,
                                "24": 32,
                                "25": 501,
                                "26": 229,
                                "27": 1,
                                "28": 975,
                                "29": 591,
                                "31": 387,
                                "32": 267,
                                "33": 47,
                                "34": 55,
                                "35": 1,
                                "36": 1,
                                "37": 673,
                                "38": 359,
                                "39": 226,
                                "40": 257,
                                "41": 855,
                                "42": 237,
                                "44": 238,
                                "45": 1,
                                "46": 236,
                                "47": 235,
                                "48": 44,
                                "49": 56,
                                "50": 86,
                                "51": 61,
                                "52": 61,
                                "53": 57,
                                "54": 269,
                                "55": 242,
                                "56": 682,
                                "57": 506,
                                "58": 385,
                                "59": 53,
                                "60": 357,
                                "61": 420,
                                "62": 45,
                                "63": 253,
                                "64": 1,
                                "65": 1,
                                "66": 56,
                                "67": 593,
                                "68": 20,
                                "69": 503,
                                "70": 44,
                                "71": 240,
                                "72": 372,
                                "73": 251,
                                "74": 500,
                                "75": 298,
                                "76": 679,
                                "77": 358,
                                "78": 33,
                                "79": 594,
                                "80": 689,
                                "81": 241,
                                "82": 220,
                                "83": 995,
                                "84": 49,
                                "85": 350,
                                "86": 30,
                                "87": 299,
                                "88": 1,
                                "89": 590,
                                "90": 502,
                                "91": 44,
                                "92": 245,
                                "93": 224,
                                "94": 592,
                                "95": 509,
                                "96": 379,
                                "97": 504,
                                "98": 852,
                                "99": 36,
                                "100": 354,
                                "101": 91,
                                "102": 98,
                                "103": 964,
                                "104": 353,
                                "105": 44,
                                "106": 972,
                                "107": 39,
                                "108": 225,
                                "109": 1,
                                "110": 81,
                                "111": 44,
                                "112": 962,
                                "113": 7,
                                "114": 254,
                                "115": 686,
                                "116": 965,
                                "117": 856,
                                "118": 371,
                                "119": 961,
                                "120": 266,
                                "121": 231,
                                "122": 218,
                                "123": 423,
                                "124": 370,
                                "125": 352,
                                "126": 853,
                                "127": 389,
                                "128": 261,
                                "129": 265,
                                "130": 60,
                                "131": 960,
                                "132": 223,
                                "133": 356,
                                "134": 596,
                                "135": 222,
                                "136": 230,
                                "137": 262,
                                "139": 691,
                                "140": 373,
                                "141": 377,
                                "142": 976,
                                "143": 382,
                                "144": 1,
                                "145": 212,
                                "146": 258,
                                "147": 95,
                                "148": 264,
                                "149": 674,
                                "150": 977,
                                "151": 599,
                                "152": 31,
                                "153": 687,
                                "154": 64,
                                "155": 505,
                                "156": 227,
                                "157": 234,
                                "158": 672,
                                "159": 850,
                                "160": 44,
                                "161": 47,
                                "162": 968,
                                "163": 92,
                                "164": 507,
                                "165": 675,
                                "166": 595,
                                "167": 51,
                                "168": 63,
                                "169": 870,
                                "170": 48,
                                "171": 689,
                                "172": 351,
                                "173": 974,
                                "174": 262,
                                "175": 40,
                                "176": 7,
                                "177": 250,
                                "178": 500,
                                "179": 239,
                                "180": 378,
                                "181": 966,
                                "182": 44,
                                "183": 221,
                                "184": 381,
                                "185": 248,
                                "187": 232,
                                "188": 65,
                                "189": 421,
                                "190": 386,
                                "191": 677,
                                "192": 252,
                                "193": 27,
                                "194": 82,
                                "195": 34,
                                "196": 94,
                                "197": 290,
                                "198": 1,
                                "199": 508,
                                "200": 1,
                                "201": 1,
                                "202": 1,
                                "203": 249,
                                "204": 597,
                                "205": 47,
                                "206": 268,
                                "207": 46,
                                "208": 41,
                                "209": 963,
                                "210": 992,
                                "211": 886,
                                "213": 255,
                                "214": 66,
                                "215": 228,
                                "216": 690,
                                "217": 676,
                                "218": 1,
                                "219": 216,
                                "220": 993,
                                "221": 1,
                                "222": 688,
                                "223": 256,
                                "224": 380,
                                "225": 971,
                                "226": 598,
                                "227": 998,
                                "228": 678,
                                "229": 379,
                                "230": 58,
                                "231": 84,
                                "232": 1,
                                "233": 44,
                                "234": 681,
                                "235": 212,
                                "236": 685,
                                "237": 967,
                                "239": 242,
                                "240": 260,
                                "241": 263,
                                "242": 0,
                                "243": 970,
                                "245": 1,
                                "246": 291,
                                "247": 233,
                                "248": 62,
                                "249": 996,
                                "250": 692,
                                "251": 234,
                                "252": 680,
                                "253": 90
                            };
                            var number = $('#UserPhone').val();
                            $('#UserPhone').val('+' + country_codes[chosenCountryId.toString()] + ' - ' + phoneNumber);
                            $.ajax({
                                url: "/users/getCountryRegions/" + chosenCountryId,
                            })
                                .done(function (data) {
                                    if (data.length) {
                                        $('#UserState')
                                            .html(data)
                                            .find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                                            .trigger('chosen:updated');
                                        $(".stateus").removeClass('hide')

                                        $(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                        if (!$('input#UserInvite').prop('checked')) {
                                            $(".stateus").removeClass('hide')
                                                .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                                .find("input").removeAttr("disabled");
                                            $('#UserPostalCode').closest('div').show();
                                        }

                                    } else {
                                        $(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                                        $('#UserPostalCode').closest('div').hide();
                                        if (!$('input#UserInvite').prop('checked')) {
                                            $(".stateother").removeClass('hide')
                                                .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                                .find("input").removeAttr("disabled").val('');
                                        }
                                    }

                                    initialState = '';
                                });
                        }).change();
                    } else {
                        var chosenCountryId = 1;
                        $.ajax({
                            url: "/users/getCountryRegions/" + chosenCountryId,
                        })
                            .done(function (data) {
                                if (data.length) {
                                    $('#UserState')
                                        .html(data)
                                        .find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                                        .trigger('chosen:updated');
                                    $(".stateus").removeClass('hide')

                                    $(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                    if (!$('input#UserInvite').prop('checked')) {
                                        $(".stateus").removeClass('hide')
                                            .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                            .find("input").removeAttr("disabled");
                                        $('#UserPostalCode').closest('div').show();
                                    }

                                } else {
                                    $(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                                    $('#UserPostalCode').closest('div').hide();
                                    if (!$('input#UserInvite').prop('checked')) {
                                        $(".stateother").removeClass('hide')
                                            .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                            .find("input").removeAttr("disabled").val('');
                                    }
                                }

                                initialState = '';
                            });
                    }

                    $('select[name*=state]').chosen({
                        width: "100%"
                    });


                    $('#BusinessProfileBusinessOffers')
                        .keyup(function () {
                            limitChars('BusinessProfileBusinessOffers', 1000);
                        })
                        .keyup();
                    $('#BusinessProfileBusinessRequest')
                        .keyup(function () {
                            limitChars('BusinessProfileBusinessRequest', 1000);
                        })
                        .keyup();
                    $('#add-website').click(function () {
                        var websiteCount = $('.website-question').children('.website').length;
                        if (websiteCount < 5) {
                            $(this).parent().parent().parent().children().each(function () {
                                if ($(this).hasClass('hidden')) {
                                    $(this).addClass('website');
                                    $(this).removeClass('hidden');
                                    return false;
                                }
                            });
                        }
                    });
                    $(document).on('click', 'a.delete-website', function () {
                        var className = $(this).parent().attr('class');
                        $('#' + className + "Url").val('');
                        $('#' + className + "Type").val('');
                        $(this.parentElement).addClass('hidden');
                        $(this.parentElement).removeClass('website');
                    });
                });
            </script>
        </div>
@stop