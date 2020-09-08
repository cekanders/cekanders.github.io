<?php include("includes/init.php"); ?> 
<?php include("includes/head.php"); ?>
<?php include("includes/nav.php"); ?>


<div class='row'>

    <div>
        <div class="tag">
        <p>UX INTERNSHIP</p>
        </div>

        <div class='title'>
            <p>Parachute Email Campaign</p>
        </div>

        <div class='small'>
            <span style="font-family: Avenir Heavy">DURATION</span><br> May-August 2020 (12 weeks)
            <br>
            <br>
            <span style="font-family: Avenir Heavy">TEAM</span><br> Katharina Ruckelshausen-Oni (Account Manager), Johnnie Aiello (UX Director), Brooke Boland (Visual Designer) <br>
            <br>
            <span style="font-family: Avenir Heavy">FOCUS</span><br> Market Research, Data Analysis, Customer Segmentation, Visual Design <br>
            <br>
            <span style="font-family: Avenir Heavy">TOOLS</span><br> Python, Figma, Sketch, Frontitude</p>
        </div>
    </div>

    <div>
        <figure>
            <img src="images/iPhoneX.png" />
        </figure>
    </div>
</div>

<hr>

<div class='narrow'>
    <div class="tag">
        <p>SUMMARY</p>
    </div>

    <p>During my internship at Catch New York Agency, I collaborated with a team to create an acquisition email series campaign targeted at eligible organization members for Parachute Digital Solutions, an end-to-end insurance platform. In this process, I conducted market research and analyzed data in order to segment customers, as well as iterated on the visual design of the emails for two products: Cancer Insurance and Sr. Term Life Insurance. </p>

    <div class="tag">
        <p>THE PROBLEM</p>
    </div>
    <p>Some mid to lower level insurance plans do not provide cancer coverage or life insurance. Oftentimes, people believe that they are healthy will not get cancer or are unaware of the need for coverage via an email campaign.</p> 

    <div class="tag">
        <p>THE SOLUTION</p>
    </div>
    <p>To inform people about potential health risks and how they can take control of their health, Parachute is partnering with organizations to promote an exclusive offer for members.</p>

    <div class="title2">
    <p>Cancer Insurance</p>
    </div>
    
    <div class='tag'>
        <p>DATA INTERPRETATION</p>
    </div>

    <p>In order to create segments for the email campaign, I interpreted SHAP values for different features (ex. age, income) which indicate closeness to the average prediction, measuring consumer behavior.  
        A negative correlation between variables indicates that as the variable tested increases, consumers are less like the target audience. 
        A positive correlation between variables indicates that as the variable tested increases, consumers are more like the target audience. 
        I grouped features based on whether there was a negative or positive correlation to determine which features were characteristic of our target audience. 

    <p>


        <div class='small'>
            <p><span style="font-family: Avenir Heavy">SHAP Values</span></p>
        </div>

        <img src='images/shap.png' alt='shap'/>
        <div class='small'>
            <p><span>&#42;</span>Red indicates high feature value and blue indicates low feature value</p>
        </div>
 

    <div class='tag'>
        <p>FINDINGS</p>
    </div>

    <div class='row'>
        <div>
            <p><span style="font-family: Avenir Medium">Negative Correlation</span></p>
            <ul class='list'>
                <li><p>Age</p></li>
                <li><p>Income</p></li>
                <li><p>Home Value</p></li>
            </ul>
        </div>

        <div>
        <p><span style="font-family: Avenir Medium">Positive Correlation</span></p>
        <ul class='list'>
            <li><p>Profitability</p></li>
            <li><p>Interest in International Travel</p></li>
        </div>

    </div>

    <div class='space'>
        <p>Through these findings, I was able to identify clear trends. 
            Our target audience is predominately young with a low homevalue and income. 
            However, a segment of our target audience has a high financial profitability which can be grouped with higher age and home value.
            Finally, a large segment of our target audience is interested in international travel. 
        </p>
    </div>

    <div class='tag'>
        <p>SEGMENTS</p>
    </div>

    <p>Based on this information and reasoning, the following segements and tone of voice descriptors were created:</p>
    <div class='space'></div>

    <div class="gallery">

        <div>
            <figure>
                <img src="images/explorers.png" alt="Explorers"/>
            </figure>

            <figure>
                <img src="images/nextgen.png" alt="Next Gen" />
            </figure>
        </div>

        <div>
            <figure>
            <img src="images/homeowners.png" alt="Homeowners" />
            </figure>

            <figure>
            <img src="images/general.png" alt="General" />
            </figure>
        </div>


</div>

<p>For each segment, copy was developed using different messaging for each group based on the tone of voice descriptor and placed into email template designs.</p>

    <div class="title2">
    <p>Sr. Term Life Insurance</p>
    </div>


    <div class="tag">
        <p>MARKET RESEARCH</p>
    </div>
    <p>Senior term life insurance allows policyholders to receive a payment, granted to their beneficiaries, upon death. The payment is only rewarded if the policyholder passes away during the term that their life insurance spans, typically ranging from one to 30 years. There are several reasons why one should invest in senior term life insurance such as providing funds for their funeral, granting family members an inheritance, and paying off debt and business-related financial obligations. Premiums are dependent on pre-existing medical conditions and age; those who are more at risk must pay higher rates to insure themselves. Senior term life is considerably more affordable than whole life term insurance. However, consumers must evaluate their goals and needs to determine what type of senior insurance is right for them.</p>
    

    <div class='tag'>
        <p>DATA INTERPRETATION</p>
    </div>

    <p>For the senior term life insurance product, we could not use the SHAP value data that we analyzed for the cancer insurance product to create segments because the SHAP values reflect the entire dataset and only organization members within the age range of 50-80 are targeted for this product. 
        In order to better understand this niche target age range, I evaluated the significance of key features over different age groups to identify trends within the data.</p>
        <div class='space'></div>

        <p>The model score for an individual quantifies the individual’s similarity to the target market. 
            I first identified the range of 65 to 75 as the group with the highest model score, on average, due to several outliers in the range. 
            </p>
        <div class='space'></div>
        
        <div class='center'>
            <img src="images/graph1.png" alt="Model Score" />
        </div>  
        <p>However, upon further analysis of the data, I determined that these outliers do not reflect the average of an age range and that finding the mean value for each age range is essential to accurately representing categorical trends. I wanted to understand the demographic distribution of the new market. 
            I decided to focus on 5-year age groups because my market research suggested that these groups have different needs as they are enduring different stages in their lives. 
            The graph is skewed right with a peak at the 60-65 bin, meaning that there is a disproportionately large number of seniors in the range 50-65 than 65-80 which was taken into consideration when determining the age bounds for segmentation.</p>
        <div class='space'></div>

        <div class='center'>
            <img src="images/graph2.png" alt="Distribution of Age" />
        </div>
        <p>To identify trends in the dataset, I grouped the data in 5-year bins and took the mean across the individuals in each bin for a particular feature. 
            I found that as age increases, model score increases, on average. 
            Therefore, further analysis of the features tested against model score will be necessary to identify the similarities between the target market and a more elderly audience.</p>
        <div class='space'></div>

        <div class='center'>
            <img src="images/graph3.png" alt="Homeowners" />
        </div>
        
        <p>I hypothesized that as age increases, retirement rates would increase as well. 
            The data shows that as age increases, average income decreases. 
            A likely potential cause for this decrease in income is retirement, providing strong evidence to prove my hypothesis correct. 
            Therefore, understanding the impact of retirement on one’s decision to purchase senior term life insurance and the connotations surrounding the word to an elderly audience is essential to understanding the customers’ needs.</p>
        <div class='space'></div>
        <div class='center'>
            <img src="images/graph4.png" alt="Homeowners" />
        </div>  
       
   

    <div class='tag'>
        <p>SHAP VALUE ANALYSIS</p>
    </div>
    <p> Although we could not interpret the SHAP value graph provided by the internal analytics team because that graph reflected the entire dataset, I was able to analyze raw SHAP values by finding the average across age groups. 
        Through this analysis, I was able to determine whether an increase in a particular feature indicated that these individuals are more or less like the target market. 
        I then used that information to test my hypotheses.
        I chose several features to test, all of which were ranked high in importance and were relevant to purchasing life term insurance. </p>
    <div class='space'></div>



    <div class='gallery'>
        <div>
            
                <img src="images/bloodpressure.png" alt="Blood Pressure" />
                <div class='small'>
                    <p><span style="font-family: Avenir Medium">Hypothesis:</span> As age increases, blood pressure increases.</p>

                <div class='space'><p>The model proved my hypothesis correct.</p></div>
                </div>
        
                <img src="images/liability.png" alt="Liability" />
                <div class='small'>
                    <p><span style="font-family: Avenir Medium">Hypothesis: </span>As age increases, mortgage liability decreases.</p>

                <div class='space'><p>The model proved my hypothesis correct.</p></div>
                </div>
        </div>  
        
        <div>
        
                <img src="images/interest.png" alt="Interest" />
                <div class='small'>
                    <p><span style="font-family: Avenir Medium">Hypothesis:</span> As age increases, interest in  insurance increases.</p>
                
                <div class='space'><p>The model proved my hypothesis incorrect. </p></div>
                </div>
                
                <img src="images/mortgage.png" alt="Blood Pressure" />
                <div class='small'>
                    <p><span style="font-family: Avenir Medium">Hypothesis: </span>As age increases, mortgage age increases.</p>
                <div class='space'>The model proved my hypothesis correct.</p></div>
                </div>
        </div>

</div>

    <div class='tag'>
        <p>SEGMENTS AND ANALYSIS</p>
    </div>

    <div class='space'></space>
    <img src='images/segments.png' alt='segments analysis'>

</div>
</div>
