{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
<style>
    /*LIST VIEW*/
    .listViewEntriesTable {
        font-size:11px;
        table-layout:fixed;
        border-collapse:collapse;
        padding-left: 0;
        padding-right: 0;
    }
    .listViewEntriesTable th,
    .listViewEntriesTable td {
        width: 70px;
    }

</style>
<input type="hidden" id="view" value="{$VIEW}" />
<input type="hidden" id="pageStartRange" value="{$PAGING_MODEL->getRecordStartRange()}" />
<input type="hidden" id="pageEndRange" value="{$PAGING_MODEL->getRecordEndRange()}" />
<input type="hidden" id="previousPageExist" value="{$PAGING_MODEL->isPrevPageExists()}" />
<input type="hidden" id="nextPageExist" value="{$PAGING_MODEL->isNextPageExists()}" />
<input type="hidden" id="alphabetSearchKey" value= "{$MODULE_MODEL->getAlphabetSearchField()}" />
<input type="hidden" id="Operator" value="{$OPERATOR}" />
<input type="hidden" id="alphabetValue" value="{$ALPHABET_VALUE}" />
<input type="hidden" id="totalCount" value="{$LISTVIEW_COUNT}" />
<input type='hidden' value="{$PAGE_NUMBER}" id='pageNumber'>
<input type='hidden' value="{$PAGING_MODEL->getPageLimit()}" id='pageLimit'>
<input type="hidden" value="{$LISTVIEW_ENTRIES_COUNT}" id="noOfEntries">

{assign var = ALPHABETS_LABEL value = vtranslate('LBL_ALPHABETS', 'Vtiger')}
{assign var = ALPHABETS value = ','|explode:$ALPHABETS_LABEL}

<div class="alphabetSorting noprint">
	<table width="100%" class="table-bordered" style="border: 1px solid #ddd;table-layout: fixed">
		<tbody>
			<tr>
			{foreach item=ALPHABET from=$ALPHABETS}
				<td class="alphabetSearch textAlignCenter cursorPointer {if $ALPHABET_VALUE eq $ALPHABET} highlightBackgroundColor {/if}" style="padding : 0px !important"><a id="{$ALPHABET}" href="#">{$ALPHABET}</a></td>
			{/foreach}
			</tr>
		</tbody>
	</table>
</div>
<div id="selectAllMsgDiv" class="alert-block msgDiv noprint">
	<strong><a id="selectAllMsg">{vtranslate('LBL_SELECT_ALL',$MODULE)}&nbsp;{vtranslate($MODULE ,$MODULE)}&nbsp;(<span id="totalRecordsCount"></span>)</a></strong>
</div>
<div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint">
	<strong><a id="deSelectAllMsg">{vtranslate('LBL_DESELECT_ALL_RECORDS',$MODULE)}</a></strong>
</div>
<div class="contents-topscroll noprint">
	<div class="topscroll-div">
		&nbsp;
	 </div>
</div>
<div class="listViewEntriesDiv contents-bottomscroll">
	<div class="bottomscroll-div">
	<input type="hidden" value="{$ORDER_BY}" id="orderBy">
	<input type="hidden" value="{$SORT_ORDER}" id="sortOrder">
	<span class="listViewLoadingImageBlock hide modal noprint" id="loadingListViewModal">
		<img class="listViewLoadingImage" src="{vimage_path('loading.gif')}" alt="no-image" title="{vtranslate('LBL_LOADING', $MODULE)}"/>
		<p class="listViewLoadingMsg">{vtranslate('LBL_LOADING_LISTVIEW_CONTENTS', $MODULE)}........</p>
	</span>
	{assign var=WIDTHTYPE value=$CURRENT_USER_MODEL->get('rowheight')}
	<table class="table table-bordered listViewEntriesTable">
		<thead>
			<tr class="listViewHeaders">
				<th style="width:15px">
					<input type="checkbox" id="listViewEntriesMainCheckBox" />
				</th>
				{foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}
                {assign var=WIDTH value=$LISTVIEW_HEADER->get('listviewwidth')}
				<th   {if !empty($WIDTH) } style="width:{$WIDTH}px;" {/if}>
					<a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('column')}{$NEXT_SORT_ORDER}{else}ASC{/if}" data-columnname="{$LISTVIEW_HEADER->get('column')}">{vtranslate($LISTVIEW_HEADER->get('label'), $MODULE)}
						&nbsp;&nbsp;{if $COLUMN_NAME eq $LISTVIEW_HEADER->get('column')}<img class="{$SORT_IMAGE} icon-white">{/if}</a>
				</th>
				{/foreach}
                <th></th>
			</tr>
		</thead>
        {if $MODULE_MODEL->isQuickSearchEnabled()}
        <tr>
            <td></td>
			{foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}
             <td>
                 {assign var=FIELD_UI_TYPE_MODEL value=$LISTVIEW_HEADER->getUITypeModel()}
                {include file=vtemplate_path($FIELD_UI_TYPE_MODEL->getListSearchTemplateName(),$MODULE_NAME)
                    FIELD_MODEL= $LISTVIEW_HEADER SEARCH_INFO=$SEARCH_DETAILS[$LISTVIEW_HEADER->getName()] USER_MODEL=$CURRENT_USER_MODEL}
             </td>
			{/foreach}
			<td>
				<button class="btn" data-trigger="listSearch">{vtranslate('LBL_SEARCH', $MODULE )}</button>
			</td>
        </tr>
        {/if}
		{foreach item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES name=listview}
		<tr class="listViewEntries" data-id='{$LISTVIEW_ENTRY->getId()}' data-recordUrl='{$LISTVIEW_ENTRY->getDetailViewUrl()}' id="{$MODULE}_listView_row_{$smarty.foreach.listview.index+1}">
            <td  width="5%" class="{$WIDTHTYPE}">
				<input type="checkbox" value="{$LISTVIEW_ENTRY->getId()}" class="listViewEntriesCheckBox"/>
			</td>
			{foreach item=LISTVIEW_HEADER from=$LISTVIEW_HEADERS}
			{assign var=LISTVIEW_HEADERNAME value=$LISTVIEW_HEADER->get('name')}
            
          
            {if $LISTVIEW_HEADERNAME=='cf_773'}
                {assign var=entryRawData value=$LISTVIEW_ENTRY->getRawData()}
                {assign var=coloredBill value=$entryRawData['colored_bill']}
                {assign var=colorStyle value='style="background:'|cat:$coloredBill|cat:';"'}
                {assign var=summaryData value='data-summary="payment"'}
            {else if $LISTVIEW_HEADERNAME=='cf_791'}
                {assign var=entryRawData value=$LISTVIEW_ENTRY->getRawData()}
                {assign var=coloredDriver value=$entryRawData['colored_driver']}
                {assign var=colorStyle value='style="background:'|cat:$coloredDriver|cat:';"'}
                {assign var=summaryData value='data-summary="driver"'}
            {else if $LISTVIEW_HEADERNAME=='cf_793'}
                {assign var=summaryData value='data-summary="manager"'}
                {assign var=colorStyle value=''}
                {assign var=summaryData value=''}
            {else}
                {assign var=colorStyle value=''}
                {assign var=summaryData value=''}
            {/if}
            
            <td {$colorStyle} {$summaryData} class="listViewEntryValue {$WIDTHTYPE}" data-field-type="{$LISTVIEW_HEADER->getFieldDataType()}" >
                

                {if ($LISTVIEW_HEADER->isNameField() eq true or $LISTVIEW_HEADER->get('uitype') eq '4') and $MODULE_MODEL->isListViewNameFieldNavigationEnabled() eq true }
					<a href="{$LISTVIEW_ENTRY->getDetailViewUrl()}">{$LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME)}</a>
				{else if $LISTVIEW_HEADER->get('uitype') eq '72'}
					{assign var=CURRENCY_SYMBOL_PLACEMENT value={$CURRENT_USER_MODEL->get('currency_symbol_placement')}}
					{if $CURRENCY_SYMBOL_PLACEMENT eq '1.0$'}
						{$LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME)}{$LISTVIEW_ENTRY->get('currencySymbol')}
					{else}
						{$LISTVIEW_ENTRY->get('currencySymbol')}{$LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME)}
					{/if}
				{else}
                    {if $LISTVIEW_HEADER->getFieldDataType() eq 'double'}
                        {decimalFormat($LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME))}
                    {else}
                        {$LISTVIEW_ENTRY->get($LISTVIEW_HEADERNAME)}
                    {/if}
				{/if}
				{if $LISTVIEW_HEADER@last}
				</td><td nowrap class="{$WIDTHTYPE}">
				<div class="actions pull-right">
					<span class="actionImages">
						<a href="{$LISTVIEW_ENTRY->getFullDetailViewUrl()}"><i title="{vtranslate('LBL_SHOW_COMPLETE_DETAILS', $MODULE)}" class="icon-th-list alignMiddle"></i></a>&nbsp;
						{if $IS_MODULE_EDITABLE}
							<a href='{$LISTVIEW_ENTRY->getEditViewUrl()}'><i title="{vtranslate('LBL_EDIT', $MODULE)}" class="icon-pencil alignMiddle"></i></a>&nbsp;
						{/if}
						{if $IS_MODULE_DELETABLE}
							<a class="deleteRecordButton"><i title="{vtranslate('LBL_DELETE', $MODULE)}" class="icon-trash alignMiddle"></i></a>
						{/if}
					</span>
				</div></td>
				{/if}
			</td>
			{/foreach}
		</tr>
		{/foreach}
	</table>
{literal}
<script>
    $(window).on('load', function() {
        var summaryDriverEls = $('[data-summary="driver"]'),
            summaryPaymentEls = $('[data-summary="payment"]'),
            summaryManagerEls = $('[data-summary="manager"]');

        if ( summaryManagerEls.length > 0 ) {
            var sum = 0;
            summaryManagerEls.each(function(index){
                sum += parseFloat ( $(this).html().replace(' ', '').replace('.','') );
                
            });
            $('.listViewEntriesTable').after('<div style="font-size:16px"><b>Сумма з/п менеджерам: </b>'+ sum.toString() +'</div>');
             
        }



        if ( summaryDriverEls.length > 0 ) {
            var sum = 0;
            summaryDriverEls.each(function(index){
                sum += parseFloat ( $(this).html().replace(' ', '').replace('.','') );
                
            });
            $('.listViewEntriesTable').after('<div style="font-size:16px"><b>Оплаты водителю: </b>'+ sum.toString() +'</div>');
            
        }
        


        if ( summaryPaymentEls.length > 0 ) {
            var sum = 0;
            summaryPaymentEls.each(function(index){
                sum += parseFloat ( $(this).html().replace(' ', '').replace('.','') );
                
            });
            $('.listViewEntriesTable').after('<div style="font-size:16px"><b>Сумма счетов: </b>'+ sum.toString() +'</div>');
             
        }  
       
    });
</script>
{/literal}
<!--added this div for Temporarily -->
{if $LISTVIEW_ENTRIES_COUNT eq '0'}
	<table class="emptyRecordsDiv">
		<tbody>
			<tr>
				<td>
					{assign var=SINGLE_MODULE value="SINGLE_$MODULE"}
					{vtranslate('LBL_EQ_ZERO')} {vtranslate($MODULE, $MODULE)} {vtranslate('LBL_FOUND')}.{if $IS_MODULE_EDITABLE} {vtranslate('LBL_CREATE')} <a href="{$MODULE_MODEL->getCreateRecordUrl()}">{vtranslate($SINGLE_MODULE, $MODULE)}</a>{/if}
				</td>
			</tr>
		</tbody>
	</table>
{/if}
</div>
</div>
{/strip}
