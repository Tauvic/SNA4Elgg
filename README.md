This plugin exports a graph which represents users friendship or group memberships as a GEFX file. This format can be imported by Gephi and other SNA packages in order to get a pretty visualization of the network and perform complex SNA.

SNA4Elgg provides the following features:

Export friendships and group memberships topologies to GEFX
Nodes are users and groups
Edges are users friendships or users memberships
Dynamic graphs: Creation date is included in nodes and edges to support dynamic analysis. This feature can be used in Gephi to create cool animations
A node type is added. It serves to distinguish between users and groups when exporting groups memberships
In theory, it should support large networks. It has been tested with 2,000 users and works fine with max memory set to 64MB. Correct operation with 3,000 users and 200 groups has been reported.
INSTALLATION NOTES

Just as usual: Uncompress the plugin in the mods directory and enable it in the administrative interface.

USAGE

Go to "Administration utilities -> SNA4Elgg", create the graph by pressing the "Update" button, and after that download it through the link "Download graph". Depending on the network size, generating the graph may take a long time since it involves intensive database access.