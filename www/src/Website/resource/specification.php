
<?php include __DIR__ . '/inc/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $url; ?>">TypeSchema</a> / Specification</li>
  </ol>
</nav>

<div class="container">

  <h1>Specification</h1>

  <p>In TypeSchema our main specification is the <a href="https://github.com/chriskapp/typeschema/blob/master/schema/schema.json">TypeSchema</a>
  meta schema which describes itself. This is a HTML representation which we
  automatically generate from this meta schema. There is also a <a href="https://github.com/chriskapp/typeschema/blob/master/schema/schema.ts">TypeScript</a>
  version of the specification.</p>

  <hr>

  <div id="TypeSchema" class="psx-object"><h1>TypeSchema</h1><div class="psx-object-description">TypeSchema meta schema which describes a TypeSchema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"title"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"definitions"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="#Definitions">Definitions</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"properties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="#Properties">Properties</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"required"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (String)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">title</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;object&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">definitions</span></td><td><span class="psx-property-type"><a href="#Definitions">Definitions</a></span><br /><div class="psx-property-description">Schema definitions which can be reused</div></td></tr><tr><td><span class="psx-property-name psx-property-required">properties</span></td><td><span class="psx-property-type"><a href="#Properties">Properties</a></span><br /><div class="psx-property-description">Properties of a schema</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">required</span></td><td><span class="psx-property-type">Array (String)</span><br /><div class="psx-property-description">Array string values</div><dl class="psx-property-constraint"><dt>MinItems</dt><dd><span class="psx-constraint-minitems">1</span></dd></dl></td></tr></tbody></table></div>

  <div id="Definitions" class="psx-object"><h1>Definitions</h1><div class="psx-object-description">Schema definitions which can be reused</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ContainerProperties">ContainerProperties</a> &#38; <a href="#StructProperties">StructProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ContainerProperties">ContainerProperties</a> &#38; <a href="#MapProperties">MapProperties</a>)) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ContainerProperties">ContainerProperties</a> &#38; <a href="#StructProperties">StructProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ContainerProperties">ContainerProperties</a> &#38; <a href="#MapProperties">MapProperties</a>)) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>)</span><br /><div class="psx-property-description">Schema definitions which can be reused</div></td></tr></tbody></table></div>

  <div id="CommonProperties" class="psx-object"><h1>CommonProperties</h1><div class="psx-object-description">Common properties which can be used at any schema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"title"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"nullable"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"deprecated"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"readonly"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">title</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Distinct word which represents this schema</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">General description of this schema, should not contain any new lines.</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">JSON type of the property</div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;object&quot;</code></li><li><code>&quot;array&quot;</code></li><li><code>&quot;boolean&quot;</code></li><li><code>&quot;integer&quot;</code></li><li><code>&quot;number&quot;</code></li><li><code>&quot;string&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">nullable</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether it is possible to use a null value</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">deprecated</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether this schema is deprecated</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">readonly</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description">Indicates whether this schema is readonly</div></td></tr></tbody></table></div>

  <div id="ContainerProperties" class="psx-object"><h1>ContainerProperties</h1><div class="psx-object-description">Properties specific for a container</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;object&quot;</code></li></ul></dd></dl></td></tr></tbody></table></div>

  <div id="StructProperties" class="psx-object"><h1>StructProperties</h1><div class="psx-object-description">Struct specific properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"properties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="#Properties">Properties</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"required"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (String)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">properties</span></td><td><span class="psx-property-type"><a href="#Properties">Properties</a></span><br /><div class="psx-property-description">Properties of a schema</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">required</span></td><td><span class="psx-property-type">Array (String)</span><br /><div class="psx-property-description">Array string values</div><dl class="psx-property-constraint"><dt>MinItems</dt><dd><span class="psx-constraint-minitems">1</span></dd></dl></td></tr></tbody></table></div>

  <div id="MapProperties" class="psx-object"><h1>MapProperties</h1><div class="psx-object-description">Map specific properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"additionalProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minProperties"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">additionalProperties</span></td><td><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><br /><div class="psx-property-description">Allowed values of an object property</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxProperties</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minProperties</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr></tbody></table></div>

  <div id="ArrayProperties" class="psx-object"><h1>ArrayProperties</h1><div class="psx-object-description">Array properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"items"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"uniqueItems"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;array&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-required">items</span></td><td><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><br /><div class="psx-property-description">Allowed values of an array item</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxItems</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minItems</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">uniqueItems</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

  <div id="ScalarProperties" class="psx-object"><h1>ScalarProperties</h1><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"format"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"enum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (String) &#124; Array (Number)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"default"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String &#124; Number &#124; Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">format</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">Describes the specific format of this type i.e. date-time or int64</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">enum</span></td><td><span class="psx-property-type">Array (String) &#124; Array (Number)</span><br /><div class="psx-property-description">A list of possible enumeration values</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">default</span></td><td><span class="psx-property-type">String &#124; Number &#124; Boolean</span><br /><div class="psx-property-description">Represents a scalar value</div></td></tr></tbody></table></div>

  <div id="BooleanProperties" class="psx-object"><h1>BooleanProperties</h1><div class="psx-object-description">Boolean properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;boolean&quot;</code></li></ul></dd></dl></td></tr></tbody></table></div>

  <div id="NumberProperties" class="psx-object"><h1>NumberProperties</h1><div class="psx-object-description">Number properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"multipleOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maximum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"exclusiveMaximum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minimum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Number</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"exclusiveMinimum"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;number&quot;</code></li><li><code>&quot;integer&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">multipleOf</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">maximum</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">exclusiveMaximum</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">minimum</span></td><td><span class="psx-property-type">Number</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">exclusiveMinimum</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

  <div id="StringProperties" class="psx-object"><h1>StringProperties</h1><div class="psx-object-description">String properties</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"type"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"maxLength"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"minLength"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"pattern"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">type</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Enum</dt><dd><ul class="psx-constraint-enum"><li><code>&quot;string&quot;</code></li></ul></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">maxLength</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">minLength</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description">Positive integer value</div><dl class="psx-property-constraint"></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">pattern</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

  <div id="AllOfProperties" class="psx-object"><h1>AllOfProperties</h1><div class="psx-object-description">Combination keyword to represent an intersection type</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"allOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array ((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">allOf</span></td><td><span class="psx-property-type">Array ((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a>)</span><br /><div class="psx-property-description">Combination values</div></td></tr></tbody></table></div>

  <div id="OneOfProperties" class="psx-object"><h1>OneOfProperties</h1><div class="psx-object-description">Combination keyword to represent an union type</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"description"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"discriminator"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="#Discriminator">Discriminator</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"oneOf"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array ((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a>)</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">description</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">discriminator</span></td><td><span class="psx-property-type"><a href="#Discriminator">Discriminator</a></span><br /><div class="psx-property-description">Adds support for polymorphism. The discriminator is an object name that is used to differentiate between other schemas which may satisfy the payload description</div></td></tr><tr><td><span class="psx-property-name psx-property-required">oneOf</span></td><td><span class="psx-property-type">Array ((<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a>)</span><br /><div class="psx-property-description">Combination values</div></td></tr></tbody></table></div>

  <div id="Properties" class="psx-object"><h1>Properties</h1><div class="psx-object-description">Properties of a schema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">(<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#BooleanProperties">BooleanProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#NumberProperties">NumberProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ScalarProperties">ScalarProperties</a> &#38; <a href="#StringProperties">StringProperties</a>) &#124; (<a href="#CommonProperties">CommonProperties</a> &#38; <a href="#ArrayProperties">ArrayProperties</a>) &#124; (<a href="#AllOfProperties">AllOfProperties</a> &#124; <a href="#OneOfProperties">OneOfProperties</a>) &#124; <a href="#ReferenceType">ReferenceType</a></span><br /><div class="psx-property-description">Properties of a schema</div></td></tr></tbody></table></div>

  <div id="ReferenceType" class="psx-object"><h1>ReferenceType</h1><div class="psx-object-description">Represents a reference to another schema</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"ref"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">ref</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">To disallow nesting we can reference only at the definitions layer</div><dl class="psx-property-constraint"><dt>Pattern</dt><dd><span class="psx-constraint-pattern">^#/definitions/([A-Za-z0-9]+)$</span></dd></dl></td></tr></tbody></table></div>

  <div id="Discriminator" class="psx-object"><h1>Discriminator</h1><div class="psx-object-description">Adds support for polymorphism. The discriminator is an object name that is used to differentiate between other schemas which may satisfy the payload description</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"propertyName"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"mapping"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="#DiscriminatorMapping">DiscriminatorMapping</a></span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-required">propertyName</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">The name of the property in the payload that will hold the discriminator value</div></td></tr><tr><td><span class="psx-property-name psx-property-optional">mapping</span></td><td><span class="psx-property-type"><a href="#DiscriminatorMapping">DiscriminatorMapping</a></span><br /><div class="psx-property-description">An object to hold mappings between payload values and schema names or references</div></td></tr></tbody></table></div>

  <div id="DiscriminatorMapping" class="psx-object"><h1>DiscriminatorMapping</h1><div class="psx-object-description">An object to hold mappings between payload values and schema names or references</div><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"*"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">*</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description">An object to hold mappings between payload values and schema names or references</div></td></tr></tbody></table></div>

</div>

<?php include __DIR__ . '/inc/footer.php'; ?>